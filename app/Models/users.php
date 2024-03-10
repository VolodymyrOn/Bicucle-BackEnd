<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    
    protected $table = 'site_users';
    protected $fillable = ['email', 'password', 'type']; 

    // Один користувач може мати лише один профіль
    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'site_user_id');
    }
}

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'users_profile';
    protected $fillable = ['site_user_id','name', 'surname', 'patronimic', 'phone_number', 'address_id']; 

    // Профіль належить одному користувачеві
    public function user()
    {
        return $this->belongsTo(users::class, 'site_user_id');
    }
}
