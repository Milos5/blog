<?php

namespace App\Notifications;

use App\User;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;
    public $user;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @param  User  $user
     * @return void
     */
    public function __construct(User $user, $token)
    {
        $this->token = $token;
        $this->user = $user;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', route('password.reset', [$this->token, 'email' => $this->user->email]))
            ->line('If you did not request a password reset, no further action is required.');
    }
}
