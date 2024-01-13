<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Chairman;
use App\Models\Media;
use Illuminate\Http\Request;

class AdminChairmanController extends Controller
{
    public function index()
    {
        $chairman = Chairman::all();
        $media = Media::all();
        return view('backend.chairman.index', compact('chairman', 'media'));
    }


    public function edit($id)
    {
        $chairman = Chairman::find($id);

        if($chairman != null)
        {
            return view('backend.chairman.edit', compact('chairman'));
        }
        else
        {
            return redirect(route('admin_chairman_index'));
        }
    }
    public function update(Request $request, $id)
    {
        $data = Chairman::find($id);
        $data->status  = $request->status;
        $data->activity = $request->activity;
        $data->appointment_date = $request->appointment_date;
        $data->retirement_date = $request->retirement_date;
        $data->update();
        return redirect(route('admin_chairman_index'))->with(flash_update());
    }
}
