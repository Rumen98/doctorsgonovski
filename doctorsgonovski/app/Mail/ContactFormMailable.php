<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('contact.emails.contact')
                    ->from($this->data['emailAddress'], $this->data['fullName'])
                    ->replyTo($this->data['emailAddress'], $this->data['fullName'])
                    ->subject($this->data['subject'])
                    ->with([
                        'name' => $this->data['fullName'],
                        'emailAddress' => $this->data['emailAddress'],
                        'subject' => $this->data['subject'],
                        'messageBody' => $this->data['message']
                    ]);
    }

}
