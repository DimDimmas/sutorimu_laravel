@extends('layouts.admin')

@section('title', 'Detail Request')
@section('content')

<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Request List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('request.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Detail Request</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('request.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
    <br>
    <div class="container mt-5 mb-5 center">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title Anime</label>
                            <input type="text" class="form-control" value="{{ $request->title_anime }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" cols="30" rows="10" disabled>
                                {{ $request->text }}
                            </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" value="{{ $request->status }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection