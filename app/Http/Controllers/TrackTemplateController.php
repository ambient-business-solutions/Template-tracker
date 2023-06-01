<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrackTemplateController extends Controller
{
    public function index()
    {
      
        return view('sales.cash-sales');
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        
        $template = new uploaded_template   ;
        $template->name = $request->input('name');
        $template->image = $fileName;
        $template->save();

        return redirect()->route('sales.cash-sales')->with([
            'message' => 'Template added successfully!', 
            'status' => 'success'
        ]);
    }
}
