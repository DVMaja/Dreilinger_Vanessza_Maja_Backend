<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index()
    {
        return Tema::all();
    }

    public function store(Request $request)
    {
        $tema = new Tema();
        $tema->temanev = $request->temanev;
        $tema->save();
    }
    public function show($id)
    {
        $tema = Tema::find($id);
    }
    public function update(Request $request, $id)
    {
        $tema = Tema::find($id);
        $tema->temanev = $request->temanev;
        $tema->save();
    }
    public function destroy($id)
    {
        Tema::find($id)->delete();
    }
}
