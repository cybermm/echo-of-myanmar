<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
  public function setLocale(string $locale) {

    // Set Locale Language via Session
    if (!empty($locale)) {
      if (strlen($locale) <= 3) {
        \Session::put('locale', $locale);
      }
    }
    return back();

  }
}