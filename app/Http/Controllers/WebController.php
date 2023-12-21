<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CurrencyExchange\CurrencyExch;

class WebController extends Controller
{
    public function index() {
        $testClass = new CurrencyExch;
        var_dump($testClass->setType('cash')->setCurrency('EUR')->execute());
        die();
    }
}
