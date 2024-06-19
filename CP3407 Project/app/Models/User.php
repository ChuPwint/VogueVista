<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'c_name',
        'c_email',
        'c_password',
        'c_profile',
        'c_phone',
        'c_address',
        'c_postcode',
        'wishlist_id',
        'del_flg'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'c_password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'c_password' => 'hashed',
        ];
    }

    public function createUser($request){
        // Retrieve the last wishlist_id from the table
        $lastWishlist = DB::table('users')->orderBy('id', 'DESC')->first();

        // Determine the new wishlist_id
        $newWishlistId = $lastWishlist ? $lastWishlist->wishlist_id + 1 : 1;
        
        DB::table('users')
            ->insert([
                "c_name" => $request->name,
                "c_email" => $request->email,
                "c_phone" => $request->phone,
                "c_password" => Hash::make($request->password),
                "wishlist_id" => $newWishlistId,
            ]);
    }
}