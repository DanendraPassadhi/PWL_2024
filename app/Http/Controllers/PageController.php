<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Danendra Nayaka Passadhi | 2341720144';
    }

    public function articles($id) {
        return 'Halaman Artikel ke-' . $id;
    }
}
