<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;
    
    public function vehicleModel()
    {
        return $this->hasMany(VehicleModel::class, 'make_id');
    }

    public function index()
    {
        $makes = \App\Models\Make::all();
        return view('makes.index', compact('makes'));
    }

    public function show(string $id)
    {
        $make = \App\Models\Make::find($id);
        return view('makes.show', compact('make'));
    }

    public function create()
    {
        return view('makes.create');
    }

    public function store(Request $request)
    {
        $make = new \App\Models\Make;
        $make->name = $request->name;
        $make->save();
        return redirect('/makes');
    }
}
