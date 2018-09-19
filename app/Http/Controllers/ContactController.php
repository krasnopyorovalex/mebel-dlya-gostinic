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
        Mail::to(['djShtaket88@mail.ru', 'info@krasber.ru'])->send(new ContactFormSended($request->all()));

        $request->session()->flash('status', 'Благодарим за вашу заявку. Наш менеджер свяжется с вами в ближайшее время');

        return back();
    }
}
