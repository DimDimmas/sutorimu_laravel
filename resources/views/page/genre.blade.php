@extends('layouts.app')
@section('title', 'Tempat Stream Anime Subtitle Indonesia')
@section('content')
<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-sm-8 space">
            <!-- list genre -->
            <div class="ongoing">
                <div class="title-ongoing">
                    <strong><h5>Genre</h5></strong>
                </div>
                <div class="container-genre" id="container-genre">
                    @forelse ($items as $item)
                    <a href="" class="box-genre">{{ $item->genre }}</a>
                    @empty
                    <a class="box-genre">Data Not Found</a>
                    @endforelse
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
                    <a href="">
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