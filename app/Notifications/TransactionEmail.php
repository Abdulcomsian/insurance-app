<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class TransactionEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $transaction;
    protected $user;

    public function __construct($user,$transaction)
    {
        $this->transaction = $transaction;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        if($this->transaction->status == 'Paid'){
            $url = env('CUSTOMER_DOMAIN').$this->transaction->pdf;
            $action_text = 'Transaction Details';
            $message = ' your transaction is successfully completed click below "Transaction Details" button for more details:';
        }else{
            $message = ' your transaction is '. $this->transaction->status .' click below "Login" and goto transactions menu for more details:';
            $url =  env('CUSTOMER_DOMAIN').'login';
            $action_text = 'Login';
        }
        return (new MailMessage)
                    ->line($this->user->name .$message)
                    ->action($action_text ,$url)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
