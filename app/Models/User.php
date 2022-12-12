<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\{ Post, Category };
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    /**
     * Get all of the Post for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public $guarded = ['id'];
    protected $table = 'users';

    protected static function boot(){
        parent::boot();

        static::creating(function(User $user){
            $user->password = Hash::make($user->password);
        });
        static::updating(function(User $user){
            if($user->isDirty(['password'])){
                $user->password = Hash::make($user->password);
            }
        });
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
}
