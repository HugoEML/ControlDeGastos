<?php

namespace App\Http\Controllers;

use App\CategoryIncome;
use Illuminate\Http\Request;

class CategoryIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categoryincome.index', [
            'categories' => CategoryIncome::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryincome.create', [
            'category' => new CategoryIncome
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $fields = request()->validate([
            'name' => 'required',
            'date' => 'required|date'
        ]);

        CategoryIncome::create($fields);

        return redirect()->route('categoryincome.index')->with('status','Registro exitoso');
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
    public function edit(CategoryIncome $categoryincome)
    {
        return view('categoryincome.edit', [
            'category' => $categoryincome
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryIncome $categoryincome)
    {
        $fields = request()->validate([
            'name' => 'required',
            'date' => 'required|date'
        ]);

        $categoryincome->update($fields);

        return redirect()->route('categoryincome.index')->with('status','Editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
