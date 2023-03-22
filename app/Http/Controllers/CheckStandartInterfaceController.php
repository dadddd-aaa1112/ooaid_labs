<?php

namespace App\Http\Controllers;

use App\Jobs\ForeachArrJob;
use App\Mail\SendMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckStandartInterfaceController extends Controller
{
    public $month;

    public function __construct()
    {
        $this->month = [
            'Monday',
            'Tuesday',
            'Wednesday',
        ];
    }

    public function sendMessage()
    {
        $message = 'send';
        Mail::to('test@ya.ru')->send(new SendMessageMail($message));
        return response([], 200);
    }

    public function foreachArr()
    {
        dispatch(new ForeachArrJob($this->month));

    }
}
