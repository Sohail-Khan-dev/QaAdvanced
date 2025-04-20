<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'otp',
        'otp_expires_at',
        'phone',
        'role_id',
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
            'otp_expires_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Generate a new OTP for the user
     *
     * @return string
     */
    public function generateOtp(): string
    {
        // Generate a 6-digit OTP
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Save the OTP and set expiry time (10 minutes from now)
        $this->otp = $otp;
        $this->otp_expires_at = now()->addMinutes(10);
        $this->save();

        return $otp;
    }

    /**
     * Verify if the provided OTP is valid
     *
     * @param string $otp
     * @return bool
     */
    public function verifyOtp(string $otp): bool
    {
        // Check if OTP matches and hasn't expired
        if ($this->otp === $otp && $this->otp_expires_at > now()) {
            // Clear the OTP after successful verification
            $this->otp = null;
            $this->otp_expires_at = null;
            $this->save();

            return true;
        }

        return false;
    }

    /**
     * Get the blogs for the user.
     */
    public function blogs()
    {
        return $this->hasMany(BlogDetails::class);
    }

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string $roleName
     * @return bool
     */
    public function hasRole(string $roleName): bool
    {
        return $this->role && $this->role->name === $roleName;
    }

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if the user is a manager.
     *
     * @return bool
     */
    public function isManager(): bool
    {
        return $this->hasRole('manager');
    }

    /**
     * Check if the user has dashboard access.
     *
     * @return bool
     */
    public function hasDashboardAccess(): bool
    {
        return $this->isAdmin() || $this->isManager();
    }
}
