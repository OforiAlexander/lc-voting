<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function ideas()
    {
        $this->hasMany(Idea::class);
    }

    public function votes()
    {
       return $this->belongsToMany(Idea::class, 'vote');
    }

    public function getAvatar()
    {
        $firstCharacter = $this->email[0];
        $integerToUse = is_numeric($firstCharacter)
        ? ord(strtolower($firstCharacter))- 21
        : ord(strtolower($firstCharacter))- 96;

        // $randomInteger = rand(1, 36 );
        return 'https://www.gravatar.com/avatar/'
        .md5($this->email)
        .'?s=200'
        .'&d=robohash&r='
        .$integerToUse
        .'.png';
    }
}
