<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function __invoke()
    {
        return view('items.show', compact('item'));
    }
}
