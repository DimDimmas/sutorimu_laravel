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
}
