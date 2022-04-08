<?php

namespace App\Http\Controllers;

use App\Models\livrosModel;
use Illuminate\Http\Request;

class livrosController extends Controller
{
    private $objBook;

    public function __construct(){
        $this->objBook=new livrosModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=$this->objBook->all();
        return view('crud',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\livrosModel  $livrosModel
     * @return \Illuminate\Http\Response
     */
    public function show(livrosModel $livrosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livrosModel  $livrosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(livrosModel $livrosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\livrosModel  $livrosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livrosModel $livrosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livrosModel  $livrosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(livrosModel $livrosModel)
    {
        //
    }
}
