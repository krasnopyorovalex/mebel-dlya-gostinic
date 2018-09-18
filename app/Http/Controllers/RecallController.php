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
     * @return mixed
     */
    public function send(Request $request)
    {
        Mail::to(['djShtaket88@mail.ru' => 'kykyshka'])->send(new RecallSended($request->all()));

        exit('sdvsd');
    }
}
