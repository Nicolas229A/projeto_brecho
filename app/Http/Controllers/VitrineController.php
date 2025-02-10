<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iten;

class VitrineController extends Controller
{
    public function index(Request $request)
    {

        $vitrine = Iten::all();
        return view('index', ['vitrine' => $vitrine]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
    
    }
}
