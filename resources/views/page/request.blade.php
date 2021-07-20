@extends('layouts.app')
@section('title', 'Tempat Stream Anime Subtitle Indonesia')
@section('content')

<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-sm-8 space">
            <!-- list genre -->
            <div class="ongoing">
                <div class="title-ongoing">
                    <strong><h5>Request Anime</h5></strong>
                </div>
                <div class="container-genre">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @endif
                    <form action="{{ url('request-anime') }}" method="POST">
                    @csrf
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_anime" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="text" rows="5">

                                </textarea>
                                <small id="emailHelp" class="form-text text-muted">This is optional. If you not know the title of the anime, write something related to the anime.</small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning" style="float: right; margin: 1%;">Send!</button>
                    </form>
                </div>
            </div>
            <!-- end list genre -->
        </div>

        <div class="col-sm-4 space">
            <!-- recomended -->
            <div class="ongoing">
                <div class="title-ongoing">
                    <strong><h6>Recomended</h6></strong>
                </div>
                @forelse ($anime as $animes)
                <div class="box-item recomended">
                    <a href="{{ route('anime', $animes->title_list) }}">
                        <div class="image-update">
                            <img src="{{ Storage::url('public/img/cover/').$animes->cover_image }}" alt="ongoing" class="image-ongoing">
                            <div class="rating"><i class="fas fa-star"></i> {{ $animes->rate }}</div>
                        </div>
                        <div class="title-update"> {{ $animes->title_list }}</div>
                    </a>
                    <div class="desc-update">
                        Genre : {{ $animes->genre }} <br>
                        Type : {{ $animes->type }}
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Anime Updates Not Found.
                </div>
                @endforelse
            </div>
        <!-- end recomended -->
        </div>
    </div>
</div>

@endsection