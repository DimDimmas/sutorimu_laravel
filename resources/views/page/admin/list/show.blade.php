@extends('layouts.admin')

@section('title', 'Detail Anime List')
@section('content')
<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Anime List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('list.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Detail Anime</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('list.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
    <br>
    <div class="container mt-5 mb-5 center">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title List</label>
                            <input type="text" class="form-control" value="{{ $list->title_list }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Rate</label>
                            <input type="text" class="form-control" value="{{ $list->rate }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" value="{{ $list->status }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Cover Image</label><br>
                            <img src="{{ Storage::url('public/img/cover/').$list->cover_image }}" width="150px" alt="{{ $list->cover_image }}">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" value="{{ $list->type }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Total Episode</label>
                            <input type="text" class="form-control" value="{{ $list->total_episode }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Aired</label>
                            <input type="text" class="form-control" value="{{ $list->aired }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control" value="{{ $list->duration }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Trailer</label>
                            <input type="text" class="form-control" value="https://www.youtube.com/watch?v={{ $list->trailer }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" class="form-control" value="{{ $list->genre }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Synopsis</label>
                            <textarea class="form-control" cols="30" rows="10" disabled>
                                {{ $list->synopsis }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection