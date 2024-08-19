<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\LeadNotificationEmail;

class SendLeadNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $lead;
    public $partner;

    public function __construct($lead, $partner)
    {
        $this->lead = $lead;
        $this->partner = $partner;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::mailer('smtp')->to($this->partner->email)->send(
            new LeadNotificationEmail(
                $this->lead,
                $this->partner,
            )
        );
    }
}
