<?php

namespace App\Http\Controllers;

use App\Mail\RecallSended;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

/**
 * Class RecallController
 * @package App\Http\Controllers
 */
class RecallController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        Mail::to(['djShtaket88@mail.ru', 'info@krasber.ru'])->send(new RecallSended($request->all()));

        $request->session()->flash('status', 'Благодарим за вашу заявку. Наш менеджер свяжется с вами в ближайшее время');

        return back();
    }
}
