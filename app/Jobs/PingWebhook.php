<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Testing\Fluent\Concerns\Interaction;
use Spatie\GitHubWebhooks\Models\GitHubWebhookCall;

class PingWebhook implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use InteractsWithQueue;
    use SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct(public GitHubWebhookCall $webhookCall)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        ray($this->webhookCall->eventActionName());
    }
}
