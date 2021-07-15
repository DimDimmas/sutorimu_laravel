<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Req;

class RequestController extends Controller
{
    //
    public function index(){
        // $req = Req::all();
        // $sorted = $req->SortByDesc('created_at');
        // return view('page.admin.request.index',[
        //     'req' => $sorted
        // ]);

        $req = Req::latest()->paginate(10);
        return view('page.admin.request.index', compact('req'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
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
    
    public function search(Request $request){
        $keyword = $request->search;
        $req = Req::where('status', 'like', "%" . $keyword . "%")->paginate(10);
        return view('page.admin.request.index', compact('req'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
