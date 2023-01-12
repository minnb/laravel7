<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Roles;
use App\Models\Role_User;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function CheckRoles($roles)
    {
        if(!is_array($roles)){
            $roles = [$roles];
        }
        if(!$this->hasAnyRole($roles)){
            auth()->logout();
            abort(404);
        }
    }

    public static function getRoleName($id)
    {
      $role = Role_User::where('user_id', $id)->get();
      $roleName = '';
      if($role->count()>0){
        $roleName = Roles::find($role[0]->role_id)->name;
      }
      return $roleName;
    }

    public static function checkUserRole($email)
    {
      $roleName = '';
      $user = User::where('email', $email)->get();
      if($user->count()>0){
        $user_id = $user[0]->id;
        $roleName = User::getRoleName($user_id);
      }
      return $roleName;
    }

    public function hasAnyRole($roles): bool
    {
        return (bool) $this->roles()->whereIn('name', $roles)->first();
    }
   
    public function hasRole($role): bool
    {
        return (bool) $this->roles()->where('name', $role)->first();
    }

}
