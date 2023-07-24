<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class GravatarTest extends TestCase
{
    use RefreshDatabase;

    /**@test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_a()
    {
   
       $user = User::factory()->create([
           'name' => 'Alexander',
           'email' => 'afakeemail@fakeemails.com'
       ]);
   
       $gravatarUrl = $user->getGravatar();
   
       $this->assertEquals(
           'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=robohash&r=1.png',
           $gravatarUrl
       );
   
       $response = Http::get($user->getAvatar());
       $this->assertTrue($response->successful());
   
    }
   
    /**@test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_z()
    {
   
       $user = User::factory()->create([
           'name' => 'Alexander',
           'email' => 'zfakeemail@fakeemails.com'
       ]);
   
       $gravatarUrl = $user->getGravatar();
   
       $this->assertEquals(
           'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=robohash&r=26.png',
           $gravatarUrl
       );
   
       $response = Http::get($user->getAvatar());
       $this->assertTrue($response->successful());
   
    }
   
    /**@test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_0()
    {
   
       $user = User::factory()->create([
           'name' => 'Alexander',
           'email' => '0fakeemail@fakeemails.com'
       ]);
   
       $gravatarUrl = $user->getGravatar();
   
       $this->assertEquals(
           'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=robohash&r=27.png',
           $gravatarUrl
       );
   
       $response = Http::get($user->getAvatar());
       $this->assertTrue($response->successful());
    }
    
   
    /**@test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_9()
    {
   
       $user = User::factory()->create([
           'name' => 'Alexander',
           'email' => '9fakeemail@fakeemails.com'
       ]);
   
       $gravatarUrl = $user->getGravatar();
   
       $this->assertEquals(
           'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=robohash&r=36.png',
           $gravatarUrl
       );
   
       $response = Http::get($user->getAvatar());
       $this->assertTrue($response->successful());
    }
}
