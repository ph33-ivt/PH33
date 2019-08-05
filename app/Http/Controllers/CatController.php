<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Http\Requests\CreateCatRequest;
use App\Breed;
use App\Http\Requests\UpdateCatRequest;

class CatController extends Controller
{
    public function __construct()
    {
        // $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \DB::enableQueryLog();
        // $listCats= Cat::onlyTrashed()->get(); //select * from cats ;
        // $cat= Cat::withTrashed()->find(1);
        // dd(\DB::getQueryLog());
        // dd($listCats);
        // dd($cat);
        // $cat->restore();
        //force delete

        $listCats = Cat::all();
        return view('cat.list_cat', compact('listCats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listBreed = Breed::all();
        return view('cat.form-create', compact('listBreed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCatRequest $request)
    {
        // $data = $request->all();
        // $data = $request->except('_token');
        $data = $request->only('name', 'age', 'breed_id');
        // dd($data);
        //c1 : hàm insert
        // $result = Cat::insert($data); 
        // dd($result);
        //c2 : hàm create
        $cat = Cat::create($data);
        // dd($cat);

        return redirect()->route('list-cat');


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
        $cat = Cat::find($id);
        $listBreed = Breed::all();
        return view('cat.edit-cat', compact('cat', 'listBreed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatRequest $request, $id)
    {
        $data = $request->except('_token', '_method');
        $cat= Cat::find($id);
        $cat->update($data);
        return redirect()->route('list-cat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //c1 
        // $cat= Cat::find($id);
        // // dd($cat);
        // $cat->delete();
        //c2
        Cat::destroy($id);
        return redirect()->route('list-cat');
    }
}
