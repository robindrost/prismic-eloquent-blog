<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function __invoke(Request $request)
    {
        resolve('prismiceloquent.cache')->clear();

        return response()->json();
    }
}
