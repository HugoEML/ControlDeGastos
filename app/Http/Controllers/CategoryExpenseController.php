<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categoryexpense.index', [
            'categories' => CategoryExpense::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryexpense.create', [
            'category' => new CategoryExpense
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

        CategoryExpense::create($fields);

        return redirect()->route('categoryexpense.index')->with('status','Registro exitoso');
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
    public function edit(CategoryExpense $categoryexpense)
    {
        return view('categoryexpense.edit',[
            'category' => $categoryexpense
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryExpense $categoryexpense)
    {
        $fields = request()->validate([
            'name' => 'required',
            'date' => 'required|date'
        ]);

        $categoryexpense->update($fields);

        return redirect()->route('categoryexpense.index')->with('status','Editado con éxito.');
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
