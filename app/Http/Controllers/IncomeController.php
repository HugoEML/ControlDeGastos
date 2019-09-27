<?php

namespace App\Http\Controllers;

use App\Income;
use App\CategoryIncome;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('income.index', [
            'incomes' => Income::get(),
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
        return view('income.create', [
            'categories' => CategoryIncome::get()
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
            'description' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
            'date' => 'required|date'
        ]);

        Income::create($fields);

        return redirect()->route('income.index')->with('status','Registro exitoso');
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
    public function edit(Income $income)
    {
        return view('income.edit',[
            'income' => $income,
            'categories' => CategoryIncome::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Income $income)
    {
        $fields = request()->validate([
            'description' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
            'date' => 'required|date'
        ]);

        $income->update($fields);

        return redirect()->route('income.index')->with('status','Editado con éxito.');
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
