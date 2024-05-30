<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function nuovaPagina()
    {
        return view('admin.nuova-pagina');
    }

    public function wines()
    {
        $wines = Wine::paginate(20);

        return view('admin.wines', compact('wines'));
    }
}
