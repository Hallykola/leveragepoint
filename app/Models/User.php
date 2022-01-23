<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'usertype',
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
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
     }
    public function notifications(){
        return $this->hasMany(Notification::class);
     }

     public function payments()
 {
     return $this->hasMany(Payments::class);
 }

 public function licences(){
    return $this->hasMany(Licences::class);
 }
 public function meetings(){
    return $this->hasMany(Meetings::class);
 }
 public function reports(){
    return $this->hasMany(Reports::class);
 }
 public function supports(){
    return $this->hasMany(Supports::class);
 }
 public function companies(){
    return $this->hasMany(Companies::class);
 }
 public function trainings(){
    return $this->hasMany(Trainings::class);
 }
 public function companyrequests(){
    return $this->hasMany(companyrequests::class);
 }
 public function changeofownershiprequests(){
    return $this->hasMany(ChangeOwnershipRequests::class);
 }
 public function renewaloflicence(){
    return $this->hasMany(LicenceRenewalRequest::class);
 }
 public function employees(){
    return $this->hasMany(Employees::class);
 }
 public function securityguardapplicationrequest(){
    return $this->hasMany(SecurityGuardApplicationRequest::class);
 }
 public function licenceammendmentrequest(){
    return $this->hasMany(LicenceAmmendentRequest::class);
 }
 public function licencesurrenderrequest(){
    return $this->hasMany(Surrenderlicence::class);
 }











}
