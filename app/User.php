<?php

namespace App;

use App\Activation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'activated'
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
     * Get user activation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activation()
    {
        return $this->hasOne(Activation::class);
    }

    /**
     * Activate user.
     *
     * @return boolean
     */
    public function activate()
    {
        return $this->fill(['activated' => 1])->save();
    }
}
