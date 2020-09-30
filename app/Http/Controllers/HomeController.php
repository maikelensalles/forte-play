<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAplicativoRequest;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $request; 
    private $repository;

    public function __construct(Request $request, Aplicativo $aplicativo)
    {
        $this->request = $request;
        $this->repository = $aplicativo;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $aplicativos = Aplicativo::first()->paginate();

        return view('dashboard', [
            'aplicativos' => $aplicativos,
        ]);        
    }

    public function create()
    {
        return view('admin.pages.aplicativos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreUpdateAplicativoRequest $request)
    {
        $data = $request->only('nome', 'package', 'link', 'image');
 
        if ($request->hasFile('image') && $request->image->isValid()) {
            $imagePath = $request->image->store('aplicativos');

            $data['image'] = $imagePath;
        }

        $this->repository->create($data);

        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$aplicativo = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.aplicativos.edit', compact('aplicativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAplicativoRequest $request, $id)
    {
        if (!$aplicativo = $this->repository->find($id))
            return redirect()->back(); 

        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) { 
            
            if ($aplicativo->image && Storage::exists($aplicativo->image)) {
                Storage::delete($aplicativo->image);
            }

            $imagePath = $request->image->store('aplicativos');
            $data['image'] = $imagePath;
        
        }
        
        $aplicativo->update($data);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aplicativo = $this->repository->where('id', $id)->first();
        if (!$aplicativo)
            return redirect()->back();

        if ($aplicativo->image && Storage::exists($aplicativo->image)) {
            Storage::delete($aplicativo->image);
        }

        $aplicativo->delete();

        return redirect()->route('home');
    }
}
