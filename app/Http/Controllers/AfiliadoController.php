<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Afiliado;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $afiliado = Afiliado::orderBy('id', 'DESC')->paginate();

        return view('admin.pages.afiliados.index',compact('afiliado'),)
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }    
}