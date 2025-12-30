<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserAdPortal extends Model
{
    protected $connection = 'mysql_second';
    protected $table = 'users';
    public $timestamps = false;
     /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'otp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'role_id');
    }
    public function getRoleNameByIdAttribute()
    {
        return optional($this->role)->role_name ?? 'N/A';
    }
    public function offers()
    {
        return $this->hasMany(Offers::class, 'user_id'); // adjust to match your column name
    }
    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }
}
