<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{


    public function sacuvajNovuOcenu(Request $request) {

        $request->validate([
            "predmet" => "required|string",
            "ocena" => "required|int|min:1|max:5",
            "profesor" => "required|string"
        ]);


        Ocene::create([
            "predmet" => $request->get("predmet"),
            "ocena" => $request->get("ocena"),
            "profesor" => $request->get("profesor")


        ]);


        return redirect("/");


    }
}






