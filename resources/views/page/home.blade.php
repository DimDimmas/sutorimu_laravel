@extends('layouts.app')
@section('title', 'Tempat Stream Anime Subtitle Indonesia')
@section('content')
<div class="col">
    <!-- anime musiman -->
    <div class="ongoing">
        <div class="title-ongoing">
            <strong><h5>Anime Fall 2020</h5></strong>
        </div>
        <div class="ongoing-slider">
        @forelse ($seanime as $seanimes)
            <div class="container-ongoing">
                <a href="#">
                    <img src="{{ Storage::url('public/img/cover/').$seanimes->cover_image }}" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> {{ $seanimes->rate }}</div>
                    <div class="middle-ongoing">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="desc-ongoing">{{ $seanimes->title_list }}</div>
                    <div class="status-ongoing">{{ $seanimes->status }}</div>
                </a>
            </div>
            @empty
                <div class="alert alert-danger">
                    Anime Updates Not Found.
                </div>
        @endforelse
        </div>
        
    </div>
    <!-- end anime musiman -->
</div>

<div class="col-sm-8 space">
    <!-- anime ongoing -->
    <div class="ongoing">
        <div class="title-ongoing">
            <strong><h5>Updates</h5></strong>
        </div>
        @forelse ($update as $updates)
        <div class="box-item">
            <a href="anime.html">
                <div class="image-update">
                    <img src="{{ Storage::url('public/img/preview/').$updates->preview }}" alt="preview">
                </div>
                <div class="title-update">{{ $updates->title_update }} Episode {{ $updates->episode }}</div>
            </a>
            <div class="desc-update">
                Episode : {{ $updates->episode }} <br>
                Genre : {{ $updates->genre }} <br>
                Update : {{ \Carbon\Carbon::parse($updates->created_at)->diffForHumans() }}
            </div>
        </div>
        @empty
        <div class="alert alert-danger">
            Anime Updates Not Found.
        </div>
        @endforelse
        <ul class="pagination pagination-sm justify-content-center" style="clear: both;">
            <li class="page-item">{{ $update->links() }}</li>
        </ul>
    </div>
    <!--end anime ongoing -->

    <!-- anime movie -->
    <div class="ongoing space">
        <div class="title-ongoing">
            <div class="row">
                <div class="col"><strong><h5>Movie</h5></strong></div>
            
                <div class="col"><a href="{{ url('movie-list') }}" class="button-movie">More</a>
                </div>
            </div>
        </div>
        <div class="movie-slider">
        @forelse ($movie as $movies)
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ Storage::url('public/img/cover/').$movies->cover_image }}" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> {{ $movies->rate }}</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">{{ $movies->title_list }}</div>
                </a>
            </div>
            @empty
            <div class="alert alert-danger">
                Anime Updates Not Found.
            </div>
        @endforelse
        </div>
        
    </div>
    <!-- end anime movie -->
</div>

<div class="col-sm-4 space">
<!-- genre -->
    <div class="ongoing">
        <div class="title-ongoing">
            <strong><h6>Genre</h6></strong>
        </div>
        <ul class="ul-genre">
        @forelse ($items as $item)
            <li><a href="#">{{ $item->genre }}</a></li>
        @empty
            <li><a href="#">Genre Not Found</li>
        @endforelse
        </ul>
    </div>
<!-- end genre -->
<br>
<!-- season -->
<div class="ongoing" style="margin-top: 20px;">
        <div class="title-ongoing">
            <strong><h6>Season</h6></strong>
        </div>
        <ul class="ul-genre">
        @forelse ($cate as $cates)
            <li><a href="#">{{ $cates->name }}</a></li>
        @empty
            <li><a href="#">Season Not Found</li>
        @endforelse
        </ul>
    </div>
<!-- end season -->
</div>

@endsection