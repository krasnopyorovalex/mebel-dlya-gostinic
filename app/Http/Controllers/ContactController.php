<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSended;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        Mail::to(['djShtaket88@mail.ru'])->send(new ContactFormSended($request->all()));

        return back();
    }
}
