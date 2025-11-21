<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class FieldController extends Controller
{
    public function create()
    {
        return view('fields.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price_per_hour' => 'required|numeric',
        ]);

        Field::create($request->all());

        return redirect('/')->with('success', 'Lapangan berhasil ditambahkan!');
    }
}