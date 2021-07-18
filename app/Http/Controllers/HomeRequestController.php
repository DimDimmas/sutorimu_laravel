<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Req;

class HomeRequestController extends Controller
{
    //
    public function Index(){
        $anime = Anime::inRandomOrder()->limit(5)->get();
        return view('page.request', [
            'anime' => $anime
        ]);
    }

    
    public function store(Request $request)
    {
        $post = Req::create([
            'title_anime'     => $request->title_anime,
            'text' => $request->text,
            'status' => 'New',
          ]);
         
        if($post){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
