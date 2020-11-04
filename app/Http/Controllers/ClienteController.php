<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $cliente = Cliente::orderBy('id', 'DESC')->paginate();

        return view('admin.pages.clientes.index',compact('cliente'),)
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}