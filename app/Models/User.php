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


    public function personalData()
    {
        return $this->hasOne(PersonalData::class);
    }

    public function titlesCertificates()
    {
        return $this->hasMany(TitlesCertificates::class);
    }

    public function professionalHistory()
    {
        return $this->hasMany(ProfessionalHistory::class);
    }

    public function toolsSkills()
    {
        return $this->hasMany(ToolsSkills::class);
    }

    public function passwordResetRequest()
    {
        return $this->hasOne(PasswordResetRequest::class);
    }
}
