<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
  
    public function index()
    {
        $varFaq = Faq::latest()->get();
        return view('backend.faq.index', compact('varFaq'));
    }
    public function create()
    {
        return view('backend.faq.create');
    }
    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->creator = Auth::user()->name;
        $faq->save();
        return redirect(route('admin_faq_index'));
    }
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('backend.faq.edit', compact('faq'));
    }

    public function update(Request $request,string $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();
        return redirect(route('admin_faq_index'));
    }

    public function delete(string $id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect(route('admin_faq_index'));
    }
}
