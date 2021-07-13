@extends('layouts.admin')

@section('title', 'Create Anime List')
@section('content')
<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Anime List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('list.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Add New Anime List</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('list.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
    <br>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('list.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title List</label>
                            <input type="text" class="form-control @error('title_list') is-invalid @enderror" name="title_list" value="{{ old('title_list') }}" placeholder="Input Title List">
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Rate</label>
                            <input type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ old('rate') }}" placeholder="Input Rate Anime">
                        
                            <!-- error message untuk rate -->
                            @error('rate')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <!-- <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Input status Anime"> -->
                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="">-- Select --</option>
                                @foreach($status as $status)
                                <option value="{{ $status->name }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            <!-- error message untuk status -->
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Cover Image</label>
                            <input type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" id="cover_image">
                        
                            <!-- error message untuk cover_image -->
                            @error('cover_image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                                <option value="">-- Select --</option>
                                @foreach($type as $types)
                                <option value="{{ $types->name }}">{{ $types->name }}</option>
                                @endforeach
                            </select>
                            <!-- error message untuk type -->
                            @error('type')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Total Episode</label>
                            <input type="text" class="form-control @error('total_episode') is-invalid @enderror" name="total_episode" value="{{ old('total_episode') }}" placeholder="Input Total Episode Anime">
                        
                            <!-- error message untuk total_episode -->
                            @error('total_episode')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Aired</label>
                            <input type="text" class="form-control @error('aired') is-invalid @enderror" name="aired" value="{{ old('aired') }}" placeholder="Input Anime Aired">
                        
                            <!-- error message untuk aired -->
                            @error('aired')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" placeholder="Input Duration Anime">
                        
                            <!-- error message untuk duration -->
                            @error('duration')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Synopsis</label>
                            <textarea class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" rows="5" placeholder="Input Anime Synopsis">
                                {{ old('synopsis') }}
                            </textarea>
                        
                            <!-- error message untuk synopsis -->
                            @error('synopsis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Trailer</label>
                            <input type="text" class="form-control @error('trailer') is-invalid @enderror" name="trailer" value="{{ old('trailer') }}" placeholder="Input Trailer Anime. ex: https://www.youtube.com/watch?v=">
                        
                            <!-- error message untuk trailer -->
                            @error('trailer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Genre</label>
                            <!-- <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" placeholder="Input Genre Anime"> -->
                            <div class="form-check">
                            @foreach($items as $item)
                                <div style="display: inline-block; width:140px; margin-top: 5px">
                                    <input type="checkbox" name="lgenre[]" id="lgenre" value="{{ $item->genre }}">
                                    <label class="form-check-label" for="{{ $item->genre }}">{{ $item->genre }}</label>
                                </div>
                            @endforeach
                            </div>
                            <!-- error message untuk rate -->
                            @error('genre')
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'synopsis' );
</script>
@endsection