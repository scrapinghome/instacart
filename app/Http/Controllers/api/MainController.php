<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function defaultCurrency()
    {
        return response()->json(setting('default_currency'));
    }
    function currencyRight()
    {
        return response()->json(setting('currency_right', false));
    }
}
