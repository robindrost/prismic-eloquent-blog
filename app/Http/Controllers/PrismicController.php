<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prismic\Dom\RichText;

class PrismicController extends Controller
{
    public function __construct()
    {
        view()->share([
            'richText' => resolve(RichText::class),
        ]);
    }
}
