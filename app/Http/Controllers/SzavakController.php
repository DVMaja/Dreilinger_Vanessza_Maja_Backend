<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index()
    {
        return Szavak::all();
    }

    public function store(Request $request)
    {
        $szavak = new Szavak();
        $szavak->angol = $request->angol;
        $szavak->magyar = $request->magyar;
        $szavak->temaId = $request->temaId;
        $szavak->save();
    }
    public function show($id)
    {
        $szavak = Szavak::find($id);
    }
    public function update(Request $request, $id)
    {
        $szavak = Szavak::find($id);
        $szavak->angol = $request->angol;
        $szavak->magyar = $request->magyar;
        $szavak->temaId = $request->temaId;
        $szavak->save();
    }

    public function destroy($id)
    {
        Szavak::find($id)->delete();
    }

    public function szavakKategoriaNevvel()
    {

        return DB::select("SELECT  s.angol, s.magyar , t.temanev 
            FROM szavaks s
                INNER JOIN temas t ON s.temaId = t.id");

    }
    public function szavakKategoriankent($kategoriaNev)
    {
        return DB::select("SELECT  s.angol, s.magyar , t.temanev 
            FROM szavaks s
                INNER JOIN temas t ON s.temaId = t.id
                WHERE t.temanev  $kategoriaNev");

    }
}
