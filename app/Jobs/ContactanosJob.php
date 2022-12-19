<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $contacto;
    public $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($contacto,$email)
    {
        $this->contacto = $contacto;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new ContactanosMailable($this->contacto);
         Mail::to($this->email)->send($email);
         
    }
}
