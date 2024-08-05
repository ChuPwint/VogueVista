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
        'name',
        'email',
        'password',
        'profile',
        'phone',
        'address',
        'postcode',
        'wishlist_id',
        'del_flg',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function checkUser($email)
    {
        // Check if the email already exists in the users table
        return User::where('email', $email)->first();
    }

    public function getLastWishlistId()
    {
        // Retrieve the last wishlist_id from the table
        $lastWishlist = DB::table('users')->orderBy('id', 'DESC')->first();
        // Determine the new wishlist_id
        $newWishlistId = $lastWishlist ? $lastWishlist->wishlist_id + 1 : 1;
        return $newWishlistId;
    }

    public function createUser($request)
    {
        $newWishlistId = $this->getLastWishlistId();

        DB::table('users')
            ->insert([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => Hash::make($request->password),
                "wishlist_id" => $newWishlistId,
            ]);
    }

    public function createGoogleUser($name, $email, $password)
    {
        $newWishlistId = $this->getLastWishlistId();

        DB::table('users')
            ->insert([
                "name" => $name,
                "email" => $email,
                "password" => Hash::make($password),
                "wishlist_id" => $newWishlistId,
            ]);

        return User::where('email', $email)->first();
    }

    public function updatePassword($email, $password)
    {
        return DB::table('users')
            ->where('email', $email)
            ->update(['password' => Hash::make($password)]);
    }

    public function updateUserInfo($request, $userId){
        return User::where('id', $userId)
            ->update([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'postcode' => $request->postcode,
        ]);
    }

    public function deleteProfilePicture()
    {
        if ($this->profile_picture && Storage::exists($this->profile_picture)) {
            Storage::delete($this->profile_picture);
            $this->profile_picture = null;
            $this->save();
        }
    }

    public function updateProfilePicture($path)
    {
        $this->deleteProfilePicture();
        $this->profile_picture = $path;
        $this->save();
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
