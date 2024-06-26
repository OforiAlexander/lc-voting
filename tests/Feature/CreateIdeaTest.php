<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Status;
use Livewire\Livewire;
use App\Models\Category;
use App\Http\Livewire\CreateIdea;
use App\Models\Idea;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /**@test */
    public function create_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('Please login to create an idea');
        $response->assertDontSee('Let us know what you would like and we will take a look over');
    }

    /**@test */
    public function create_idea_form_does_show_when_logged_out()
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertDontSee('Please login to create an idea');
        $response->assertSee('Let us know what you would like and we will take a look over');
    }

    /**@test */
    public function main_page_contains_create_idea_livewire_component()
    {
        $this->actingAs(User::factory()->create())
        ->get(route('idea.index'))
        ->assertSeeLivewire('create-idea');
    }

    /**@test */
    public function create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
        ->test(CreateIdea::class)
        ->set('title', '')
        ->set('category', '')
        ->set('description', '')
        ->call('createIdea')
        ->assertHasErrors(['title', 'category', 'description'])
        ->assertSee('The title field is required');
    }

    /**@test */
    public function creating_an_idea_works_correctly()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categorytwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Livewire::actingAs($user)
        ->test(CreateIdea::class)
        ->set('title', 'My First Idea')
        ->set('category', $categoryOne->id)
        ->set('description', 'This is my first idea')
        ->call('createIdea')
        ->assertRedirect('/');


        $response = $this->actingAs($user)->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee('My First Idea');
        $response->assertSee('This is my first Idea');


        $this->assertDatabaseHas('ideas',
        [
            'title'=> 'My First Idea'
        ]);
    }
    /**@test */
    public function creating_two_ideas_with_same_title_still_works_but_has_different_slugs()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categorytwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Livewire::actingAs($user)
        ->test(CreateIdea::class)
        ->set('title', 'My First Idea')
        ->set('category', $categoryOne->id)
        ->set('description', 'This is my first idea')
        ->call('createIdea')
        ->assertRedirect('/');

        $this->assertDatabaseHas('ideas',
        [
            'title'=> 'My First Idea',
            'slug'=> 'my-first-idea',
        ]);

        Livewire::actingAs($user)
        ->test(CreateIdea::class)
        ->set('title', 'My First Idea')
        ->set('category', $categoryOne->id)
        ->set('description', 'This is my first idea')
        ->call('createIdea')
        ->assertRedirect('/');

        $this->assertDatabaseHas('ideas',
        [
            'title'=> 'My First Idea',
            'slug'=> 'my-first-idea-1',
        ]);
    }
}
