<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Learn;


class LearnController extends Controller{
    public function index(){
        $learn = Learn::all();
        return response()->json($learn);
    }

    public function create(Request $request) {
        // $this->validate($request, [
        //     "entity_cd" => "required|unique:ar_spec_blast_email"
        // ]);
        $learn = new Learn();
        $learn -> nama = $request->nama;
        $learn -> descs = $request ->descs;
        $learn -> save();

        return response()->json($learn);
    }

    public function show($id) {
        $learn = Learn::find($id);
        return response()->json($learn);
    }

    public function update(Request $request, $id){
        $learn = Learn::find($id);
        $learn -> nama = $request->nama;
        $learn -> descs = $request ->descs;
        $learn -> save();

        return response()->json($learn);

    }

    public function destroy($id){
        $learn = Learn::where('id',$id);
        $learn ->delete();

        return response()->json($learn);
    }

}