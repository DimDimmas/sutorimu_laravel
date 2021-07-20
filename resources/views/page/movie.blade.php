@extends('layouts.app')
@section('title', 'Tempat Stream Anime Subtitle Indonesia')
@section('content')

<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-sm space">
            <!-- list genre -->
            <div class="ongoing">
                <div class="title-ongoing">
                    <strong><h5>Movie List</h5></strong>
                </div> 
                <br>
                <!-- <ul class="pagination pagination-sm justify-content-center" style="clear: both;">
                    <li class="page-item"><a class="page-link paging page-active" href="#">A</a></li>
                    <li class="page-item"><a class="page-link paging" href="#">B</a></li>
                </ul> -->
                <div class="box-list">                
                @forelse ($anime as $animes)
                    <div class="container-ongoing">
                    
                        <img src="{{ Storage::url('public/img/cover/').$animes->cover_image }}" alt="list" class="image-ongoing">
                        <div class="rating"><i class="fas fa-star"></i> {{ $animes->rate }} </div>
                        <div class="middle-ongoing">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                        </div>
                        <div class="desc-ongoing">{{ $animes->title_list }}</div>
                        <div class="status-ongoing">{{ $animes->status }}</div>
                    </a>
                    </div>
                    @empty
                    <div class="alert alert-danger">
                        Anime Updates Not Found.
                    </div>
                @endforelse
                </div>
            </div>
            <!-- end list genre -->
        </div>
    </div>
</div>

@endsection