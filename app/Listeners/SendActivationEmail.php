<?php

namespace App\Listeners;

use App\Mail\ActivationEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendActivationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;

        // Create activation
        $activation = $user->activation()->create([
            'token' => bcrypt(str_random()),
            'expired' => now()->addDay(),
        ]);

        // Send activation email
        Mail::to($user)->send(new ActivationEmail($activation));

    }
}
