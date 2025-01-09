<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GitHubWebhooks\Models\GitHubWebhookCall;

class TesteController extends Controller
{
    public function showArray()
    {
        $array = ['item1', 'item2', 'item3'];
        $webhooks = GitHubWebhookCall::all()->toArray();
        ds('TesteController', $webhooks);
        return view('teste', ['webhooks' => $webhooks]);
    }
}
