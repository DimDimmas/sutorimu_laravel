<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Req;

class RequestController extends Controller
{
    //
    public function index(){
        $request = Req::latest()->paginate(10);
        return view('page.admin.request.index', compact('request'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Req $request)
    {
        return view('page.admin.request.show',compact('request'));
    }

    public function edit(Req $request)
    {        
        return view('page.admin.request.edit',compact('request'));
    }

    public function update(Request $r, Req $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $r->validate([
            'title_anime' => 'required',
            'status' => 'required'
        ]);

        $request->update([
            'title_anime'     => $r->title_anime,
            'text'     => $r->text,
            'status' => $r->status
        ]);

        /// setelah berhasil mengubah data
        if($request){
            // print_r($request->title_anime);
            // print_r($request->text);
            // print_r($request->status);
            //redirect dengan pesan sukses
            return redirect()->route('request.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('request.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy(Req $request)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $request->delete();
  
        return redirect()->route('request.index')
                        ->with('success','Data Berhasil Diupdate!');
    }

}
