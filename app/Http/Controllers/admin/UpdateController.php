<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Update;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    //
    public function index(){
        // $update = Update::all();
        // $sorted = $update->SortByDesc('created_at');
        // return view('page.admin.update.index', [
        //     'update' => $sorted
        // ]);

        $update = update::latest()->paginate(10);
        return view('page.admin.update.index', compact('update'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create(){
        $anime = Anime::all();
        return view('page.admin.update.create',compact('anime'));
    }

    public function store(Request $request){
        // $lgenre = implode(", ", $request->lgenre);
        // return $request;
        $this->validate($request, [
            'title_update' => 'required',
            'episode' => 'required',
            'embed_link' => 'required',
            'preview' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $preview = $request->file('preview');
        $preview->storeAs('public/img/preview', $preview->hashName());

        $update = Update::create([
            'title_update'     => $request->title_update,
            'episode' => $request->episode,
            'embed_link' => $request->embed_link,
            'preview' => $preview->hashName()
        ]);

        if($update){
            //redirect dengan pesan sukses
            return redirect()->route('update.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('update.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Update $update)
    {        
        return view('page.admin.update.edit', compact('update'));
    }

    public function update(Request $request, update $update)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'title_update' => 'required',
            'episode' => 'required',
            'embed_link' => 'required',
            'preview' => 'image|mimes:png,jpg,jpeg'
        ]);
        if($request->file('preview') == "") {

            $update->update([
                'title_update'     => $request->title_update,
                'episode' => $request->episode,
                'embed_link' => $request->embed_link
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/img/preview/'.$update->preview);
    
            //upload new image
            $preview = $request->file('preview');
            $preview->storeAs('public/img/preview', $preview->hashName());
    
            $update->update([
                'title_update'     => $request->title_update,
                'episode' => $request->episode,
                'embed_link' => $request->embed_link,
                'preview' => $preview->hashName()
            ]);
    
        }         
         
        /// setelah berhasil mengubah data
        if($update){
            //redirect dengan pesan sukses
            return redirect()->route('update.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('update.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy(Update $update)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        Storage::disk('local')->delete('public/img/preview/'.$update->preview);
        $update->delete();
  
        return redirect()->route('update.index')
                        ->with('success','Data Berhasil Diupdate!');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $update = Update::where('title_update', 'like', "%" . $keyword . "%")->paginate(10);
        return view('page.admin.update.index', compact('update'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
