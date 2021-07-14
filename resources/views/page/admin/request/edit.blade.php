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
    <center><h1><strong>Edit Request</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('request.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
    <br>
    <div class="container mt-5 mb-5 center">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('request.update', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title Anime</label>
                            <input type="text" class="form-control @error('title_anime') is-invalid @enderror" name="title_anime" value="{{ old('title_anime', $request->title_anime) }}" placeholder="Input Title Anime">
                        
                            <!-- error message untuk title -->
                            @error('title_anime')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control @error('text') is-invalid @enderror" name="text" rows="5" placeholder="text">
                                {{ old('text', $request->text) }}
                            </textarea>
                        
                            <!-- error message untuk synopsis -->
                            @error('text')
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
                                <option value="New">New</option>
                                <option value="Done">Done</option>
                            </select>
                            <!-- error message untuk status -->
                            @error('status')
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
    CKEDITOR.replace( 'text' );
</script>
@endsection