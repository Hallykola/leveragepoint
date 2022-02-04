<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use SendGrid\Mail\Mail;

class SurrenderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $form;

    public function __construct($model)
    {
        //
        $this->form   = $model;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/surrenderlicence/'.$this->form->id);

        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('Your application to surrender your licence has been sent!')
                    ->action('View Application form', $url)
                    ->line('We will get back to you shortly!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $user = Auth::user();
        $url = url('/surrenderlicence/'.$this->form->form);
        $email = new Mail();
        $email->setFrom(
            'info@leveragepoint.co.bw',
            'leveragepoint'
        );
        $email->setSubject('application to surrender your licence');
        // Replace the email address and name with your recipient
        $email->addTo(
            $user->email,
            $user->name
        );
        $email->addContent(
            'text/html',
            '<h2>Hello! '. $user->name .'</h2>
            <p>Your application to surrender your licence has been sent!</p>
            <p>View Application form <a href="'.$url.'">click here</a></p>
            We will get back to you shortly!
            '
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response =$sendgrid->send($email);
        } catch (\Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        return [
            //
            'data'=>$this->form
        ];
    }
}
