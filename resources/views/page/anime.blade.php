@extends('layouts.app')
@section('title', $items->title_list)
@section('content')
<div class="container-fluid space" style="margin-top: 2%;">
    <div class="row">
        <div class="col">
            <div class="ongoing">
                <div class="title-ongoing">
                    <strong><h4>{!! $items->title_list !!}</h4></strong>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="ongoing">
                            <div class="video-stream">
                                <!-- <video width="100%" height="100%" controls> -->
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $items->embed_link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- <iframe src="https://mega.nz/embed/{{ $items->embed_link }}" width="100%" height="100%" frameborder="0" allowfullscreen></iframe> -->
                                <!-- </video> -->
                            </div>
                        </div>
                        <!-- <ul class="pagination pagination-sm justify-content-center" style="clear: both;">
                            <li class="page-item"><a class="page-link paging page" href="#">360p</a></li>
                            <li class="page-item"><a class="page-link paging page-active" href="#">480p</a></li>
                            <li class="page-item"><a class="page-link paging" href="#">720p</a></li>
                        </ul> -->
                        <div class="container-sinopsis">
                            <div class="title-ongoing">
                                <h5>Synopsis</h5>
                            </div>
                            <p>
                                {!! $items->synopsis !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="ongoing">
                            <div class="title-ongoing">
                                <strong><h6>Info</h6></strong>
                            </div>
                            <div class="box-item recomended">
                                <a href="#">
                                    <div class="image-update image-info">
                                        <img src="{{ Storage::url('public/img/cover/').$items->cover_image }}" alt="ongoing" class="image-ongoing">
                                        <!-- <div class="rating"><i class="fas fa-star"></i> N/A</div> -->
                                    </div>
                                    <div class="title-update title-info" style="margin-top: 0;">{{ $items->title_list }}</div>
                                </a>
                                <div class="desc-info">
                                <table>
                                        <tr>
                                            <td>Studio</td>
                                            <td>:</td>
                                            <td>{{ $items->studio }}</td>
                                        </tr>
                                        <tr>
                                            <td width="70px">Score</td>
                                            <td>:</td>
                                            <td><i class="fa fa-star" aria-hidden="true"></i> {{ $items->rate }}</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>:</td>
                                            <td>{{ $items->type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>{{ $items->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Episode</td>
                                            <td>:</td>
                                            <td>{{ $items->total_episode }}</td>
                                        </tr>
                                        <tr>
                                            <td>Season</td>
                                            <td>:</td>
                                            <td>{{ $items->category }}</td>
                                        </tr>
                                        <tr>
                                            <td>Aired</td>
                                            <td>:</td>
                                            <td>{{ $items->aired }}</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td>:</td>
                                            <td>{{ $items->duration }}</td>
                                        </tr>
                                        <tr>
                                            <td>Genre</td>
                                            <td>:</td>
                                            <td>{{ $items->genre }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#Episode</th>
                                    </tr>
                                </thead>
                                @forelse($ep as $eps)
                                <tr>
                                    <td><a href="{{ route('stream', $eps->id) }}">{{ $eps->episode }}</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td><a href="#">Not Found</a></td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection