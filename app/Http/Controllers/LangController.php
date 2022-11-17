<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;

class LangController extends Controller
{
    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function index($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return back();
    }
}
