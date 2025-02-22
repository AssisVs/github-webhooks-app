<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\GitHubWebhooks\Http\Controllers\GitHubWebhooksController;
use Spatie\GitHubWebhooks\Models\GitHubWebhookCall;

class ShowController extends Controller
{
    public GitHubWebhookCall $webhooks;

    public function showArray(Request $request)
    {

       /**   Recuperar os registros do banco */
            $webhooks = GitHubWebhookCall::get();
ds('showarray', $webhooks);
            return view('showhook', ['webhooks' => $webhooks]);
    }
}
