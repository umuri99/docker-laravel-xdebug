<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $test = 'test';
        $test2 = 'test2';
        return view('quotes.index', ['quotes' => Quote::all()]);
    }
}
