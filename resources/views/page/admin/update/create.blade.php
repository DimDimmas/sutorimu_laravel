@extends('layouts.admin')

@section('title', 'Add New Update')
@section('content')

<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Update List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('update.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Add New Anime List</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('update.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
    <br>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <form action="{{ route('update.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title List</label>
                            <select class="anime form-control @error('status') is-invalid @enderror" name="title_update" id="title_update">
                                <option value="">-- Select --</option>
                                @foreach($anime as $animes)
                                <option value="{{ $animes->title_list }}">{{ $animes->title_list }}</option>
                                @endforeach
                            </select>
                        
                            <!-- error message untuk title -->
                            @error('title_update')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Episode</label>
                            <input type="text" class="form-control @error('episode') is-invalid @enderror" name="episode" value="{{ old('episode') }}" placeholder="Input Episode">
                        
                            <!-- error message untuk title -->
                            @error('episode')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Embed Video</label>
                            <input type="text" class="form-control @error('embed_link') is-invalid @enderror" name="embed_link" value="{{ old('embed_link') }}" placeholder="Input Episode">
                        
                            <!-- error message untuk title -->
                            @error('embed_link')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Preview Image</label>
                            <input type="file" class="form-control @error('preview') is-invalid @enderror" name="preview" id="preview">
                        
                            <!-- error message untuk cover_image -->
                            @error('preview')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">SAVE</button>
                        <button type="reset" class="btn btn-danger">RESET</button>
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection