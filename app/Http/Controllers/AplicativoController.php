<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAplicativoRequest;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AplicativoController extends Controller
{
    protected $request; 
    private $repository;

    public function __construct(Request $request,  $)
    {
        $this->request = $request;
        $this->repository = ;

        //$this->middleware('auth');
        /*$this->middleware('auth')->only([
            'create', 'store'
        ]);*/
        /*$this->middleware('auth')->except([ 
            'index', 'show'
        ]);*/
    }

    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $ = ::first()->paginate();

        return view('admin.pages.products.index', [
            '' => $,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAplicativoRequest $request)
    {
        $data = $request->only('');
 
        if ($request->hasFile('image') && $request->image->isValid()) {
            $imagePath = $request->image->store('produtos');

            $data['image'] = $imagePath;
        }

        $this->repository->create($data);

        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::where('id', $id)->first();
        if (!$ = $this->repository->find($id))
            return redirect()->back(); 

        return view('', [
            '' => $
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$ = $this->repository->find($id))
            return redirect()->back();

        return view('', compact(''));
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
        if (!$ = $this->repository->find($id))
            return redirect()->back(); 

        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) { 
            
            if ($->image && Storage::exists($->image)) {
                Storage::delete($->image);
            }

            $imagePath = $request->image->store('');
            $data['image'] = $imagePath;
        
        }
        
        $->update($data);

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ = $this->repository->where('id', $id)->first();
        if (!$)
            return redirect()->back();

        if ($->image && Storage::exists($->image)) {
            Storage::delete($->image);
        }

        $->delete();

        return redirect()->route('');
    } 
