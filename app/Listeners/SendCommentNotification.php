<?php

namespace App\Listeners;

use App\Events\NewComment;
use App\Models\User;
use App\Notifications\NewCommentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendCommentNotification
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
     * @param  \App\Events\NewComment  $event
     * @return void
     */
    public function handle(NewComment $event)
    {
        //Get the User whose upload was commented on
        $user = User::where('_id', $event->comment->user_id)->first();

        // dd($user);
        //Send Notification
        Notification::send($user, new NewCommentNotification($event->comment));
    }
}
