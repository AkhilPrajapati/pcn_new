<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FiscalYear;
use Illuminate\Http\Request;

class AdminFiscalYearController extends Controller
{
    
    public function index()
    {
        $var_fiscal_year = FiscalYear::orderBy('fiscal_year', 'DESC')->get();
        return view('backend.fiscal_year.index', compact('var_fiscal_year'));
    }

    public function create()
    {
        return view('backend.fiscal_year.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fiscal_year' => ['required'],
            'from' => ['required'],
            'to' => ['required'],
            'remark' => [],
        ]);

        $data = new FiscalYear();
        $data->fiscal_year = $request->fiscal_year;
        $data->remark = $request->remark;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->save();
        return redirect(route('admin_fiscal_year_index'))->with(flash_added());
    }

    public function edit($id)
    {
        $fiscal_year = FiscalYear::find($id);
        return view('backend.fiscal_year.edit', compact('fiscal_year'));
    }

    public function update(Request $request,string $id)
    {
        $data = FiscalYear::find($id);
        $data->fiscal_year = $request->fiscal_year;
        $data->remark = $request->remark;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->update();
        return redirect(route('admin_fiscal_year_index'))->with(flash_updated());
    }

 
}
