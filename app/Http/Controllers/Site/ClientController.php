<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\SendBudgetRequest;
use App\Jobs\sendEmailBudget;
use App\Jobs\sendMailContact;
use App\Mail\sendBudget;
use App\Mail\SendMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ClientController extends Controller
{

    public function budget(): View
    {
        return view('site.budget');
    }


    public function store(ClientRequest $request): RedirectResponse
    {
        $data = $request->except('_token');

        sendMailContact::dispatch($data);

        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso, entraremos em contato em breve!');
    }

    public function storeBudget(SendBudgetRequest $request): RedirectResponse
    {
        $data = $request->except('_token');

        SendEmailBudget::dispatch($data);

        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso, entraremos em contato em breve!');

    }
}
