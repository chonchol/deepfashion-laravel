<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        //return $this->view('view.name');
        return $this->from('chonchol057@gmail.com')
            ->view('web.partials.feedbackMail')
            ->subject('DeepFashion Test Mail!');
            //->text('mails.demo_plain')
//            ->with(
//                [
//                    'testVarOne' => '1',
//                    'testVarTwo' => '2',
//                ]);

    }
}
