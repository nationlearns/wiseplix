<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\LeadConfirmationEmail;

class SendLeadConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $lead;
    public $user;

    public function __construct($lead, $user)
    {
        $this->lead = $lead;
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::mailer('smtp')->to($this->user->email)->send(
            new LeadConfirmationEmail(
                $this->lead,
                $this->user,
            )
        );
    }
}
