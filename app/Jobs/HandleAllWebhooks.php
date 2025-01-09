<?php

namespace App\Jobs;

use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Testing\Fluent\Concerns\Interaction;
use Spatie\GitHubWebhooks\Models\GitHubWebhookCall;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleAllWebhooks implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use InteractsWithQueue;
    use SerializesModels;

    public function __construct(
        public GitHubWebhookCall $webhookCall
    ) {
    }

    public function handle()
    {
        ds('Handling all webhooks');
    }
}
