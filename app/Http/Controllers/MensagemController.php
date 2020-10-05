<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;


class MensagemController extends Controller
{
    protected $request; 
    private $repository;

    public function __construct(Request $request, Mensagem $mensagem)
    {
        $this->request = $request;
        $this->repository = $mensagem;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagens = Mensagem::all();

        return view('admin.pages.mensagens.index', [
            'mensagens' => $mensagens,
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.mensagens.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('titulo', 'alerta', 'id');

        $this->repository->create($data);

        return redirect()->route('mensagens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$mensagem = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.mensagens.edit', compact('mensagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$mensagem = $this->repository->find($id))
            return redirect()->back(); 

        $data = $request->all();
        
        $mensagem->update($data);

        return redirect()->route('mensagens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensagem = $this->repository->where('id', $id)->first();
        if (!$mensagem)
            return redirect()->back();

        $mensagem->delete();

        return redirect()->route('mensagens.index');
    }
}
