<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\StatusList;
use App\Models\TypeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimeController extends Controller
{
    //
    public function index(){
        $list = Anime::latest()->paginate(10);
        return view('page.admin.list.index', compact('list'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        $item = Genre::all();
        $status = StatusList::all();
        $type = TypeList::all();
        return view('page.admin.list.create',compact('item', 'status', 'type'), [
            'items' => $item
        ], [
            'status' => $status
        ], [
            'type' => $type
        ]);
    }

    public function store(Request $request){
        // $lgenre = implode(", ", $request->lgenre);
        // return $request;
        $this->validate($request, [
            'title_list' => 'required',
            'rate' => 'required',
            'status' => 'required',
            'cover_image' => 'required|image|mimes:png,jpg,jpeg',
            'type'     => 'required',
            'total_episode'   => 'required',
            'aired' => 'required',
            'duration' => 'required',
            'synopsis' => 'required',
            'category' => 'required'
        ]);

        $cover_image = $request->file('cover_image');
        $cover_image->storeAs('public/img/cover', $cover_image->hashName());

        $list = Anime::create([
            'title_list'     => $request->title_list,
            'rate' => $request->rate,
            'status' => $request->status,
            'cover_image' => $cover_image->hashName(),            
            'type'   => $request->type,
            'total_episode' => $request->total_episode,
            'aired' => $request->aired,
            'duration' => $request->duration,
            'synopsis' => $request->synopsis,
            'genre' => implode(", ", $request->lgenre),
            'trailer' => $request->trailer,
            'category' => $request->category
        ]);

        if($list){
            //redirect dengan pesan sukses
            return redirect()->route('list.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('list.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Anime $list)
    {
        return view('page.admin.list.show',compact('list'));
    }

    public function edit(Anime $list)
    {        
        $item = Genre::all();
        $status = StatusList::all();
        $type = TypeList::all();
        return view('page.admin.list.edit',compact('list', 'item', 'status', 'type'), [
            'items' => $item
        ], [
            'status' => $status
        ], [
            'type' => $type
        ]);
    }

    public function update(Request $request, Anime $list)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'title_list' => 'required',
            'rate' => 'required',
            'status' => 'required',
            'cover_image' => 'image|mimes:png,jpg,jpeg',
            'type'     => 'required',
            'total_episode'   => 'required',
            'aired' => 'required',
            'duration' => 'required',
            'synopsis' => 'required',
            'category' => 'required'
        ]);
        if($request->file('cover_image') == "") {

            $list->update([
                'title_list'     => $request->title_list,
                'rate' => $request->rate,
                'status' => $request->status,           
                'type'   => $request->type,
                'total_episode' => $request->total_episode,
                'aired' => $request->aired,
                'duration' => $request->duration,
                'synopsis' => $request->synopsis,
                'genre' => implode(", ", $request->lgenre),
                'trailer' => $request->trailer,
                'category' => $request->category
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/img/cover/'.$list->cover_image);
    
            //upload new image
            $cover_image = $request->file('cover_image');
            $cover_image->storeAs('public/img/cover', $cover_image->hashName());
    
            $list->update([
                'title_list'     => $request->title_list,
                'rate' => $request->rate,
                'status' => $request->status,
                'cover_image' => $cover_image->hashName(),            
                'type'   => $request->type,
                'total_episode' => $request->total_episode,
                'aired' => $request->aired,
                'duration' => $request->duration,
                'synopsis' => $request->synopsis,
                'genre' => implode(", ", $request->lgenre),
                'trailer' => $request->trailer,
                'category' => $request->category
            ]);
    
        }         
         
        /// setelah berhasil mengubah data
        if($list){
            //redirect dengan pesan sukses
            return redirect()->route('list.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('list.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy(Anime $list)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        Storage::disk('local')->delete('public/img/cover/'.$list->cover_image);
        $list->delete();
  
        return redirect()->route('list.index')
                        ->with('success','Data Berhasil Diupdate!');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $list = Anime::where('title_list', 'like', "%" . $keyword . "%")->paginate(10);
        return view('page.admin.list.index', compact('list'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
