<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'expired',
    ];

    /**
     * Complete user activation.
     *
     * @param  string $token
     *
     * @return void
     */
    public static function complete($token)
    {
        $activation = self::whereToken($token)->first();

        $activation->user->activate();
    }

    /**
     * Get activation user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
