<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Resend\Laravel\Facades\Resend;

class SendMail extends Controller
{
    Resend::emails()->send([
        'from' => 'Acme <onboarding@resend.dev>',
        'to' => [$request->user()->email],
        'subject' => 'hello world',
        'html' => (new OrderShipped($order))->render(),
    ])

}
