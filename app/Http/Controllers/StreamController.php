<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class StreamController extends Controller
{
    public function index($id)
    {
        $item = Update::with(['anime'])
        ->findOrFail($id);
        return view('page.stream', [
            'items' => $item
        ]);
    }
}
