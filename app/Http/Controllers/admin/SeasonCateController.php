<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeasonCate;
use App\Http\Requests\SeasonCateRequest;

class SeasonCateController extends Controller
{
    //
    public function index(){
        // $cate = SeasonCate::all();

        // return view('page.admin.category.index', [
        //     'cate' => $cate
        // ]);

        $cate = SeasonCate::latest()->paginate(10);
        return view('page.admin.category.index', compact('cate'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // public function create(){
    //     $cate = SeasonCate::all();
    //     return view('page.admin.category.create',compact('cate'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonCateRequest $request)
    {
        $data = $request->all();

        SeasonCate::create($data);
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $cate = SeasonCate::find($id);
        $cate->delete();

        return redirect()->route('category.index');
    }
}
