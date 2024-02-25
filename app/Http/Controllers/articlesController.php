<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function articles($id) {
        return 'Halaman Artikel ke-'.$id;
        }
}
