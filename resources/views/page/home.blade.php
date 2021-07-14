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
            <div class="container-ongoing">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/ongoing/106668.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> 7.48</div>
                    <div class="middle-ongoing">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="desc-ongoing">Mahouka Koukou no Rettousei: Raihousha-hen</div>
                    <div class="status-ongoing">On-going</div>
                </a>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/106768.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 8.64 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Haikyuu!!: To the Top 2nd Season</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/108380.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 7.73 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka III</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/108501.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 7.68 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Majo no Tabitabi</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/108722.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 7.79 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Tonikaku Kawaii</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/109044.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 7.09 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Kimi to Boku no Saigo no Senjou, Aruiwa Sekai ga Hajimaru Seisen</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/109146.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 7.25</div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Munou na Nana</div>
                <div class="status-ongoing">On-going</div>
            </div>
            <div class="container-ongoing">
                <img src="{{ url('frontend') }}/assets/img/ongoing/109222.jpg" alt="ongoing" class="image-ongoing">
                <div class="rating"><i class="fas fa-star"></i> 8.16 </div>
                <div class="middle-ongoing">
                <div class="text-ongoing"><i class="fas fa-play"></i></div>
                </div>
                <div class="desc-ongoing">Jujutsu Kaisen (TV)</div>
                <div class="status-ongoing">On-going</div>
            </div>
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
        <div class="box-item">
            <a href="anime.html">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (47).png" alt="preview">
                </div>
                <div class="title-update">Tonikaku Kawaii</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (46).png" alt="preview">
                </div>
                <div class="title-update">Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka III</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <div class="box-item">
            <a href="#">
                <div class="image-update">
                    <img src="{{ url('frontend') }}/assets/img/preview/Screenshot (45).png" alt="preview">
                </div>
                <div class="title-update">Mahouka Koukou no Rettousei: Raihousha-hen</div>
            </a>
            <div class="desc-update">
                Episode : 3 <br>
                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                Update : 5 Hour Ago
            </div>
        </div>
        <ul class="pagination pagination-sm justify-content-center" style="clear: both;">
            <li class="page-item"><a class="page-link paging page-active" href="#">1</a></li>
            <li class="page-item"><a class="page-link paging" href="#">2</a></li>
        </ul>
    </div>
    <!--end anime ongoing -->

    <!-- anime movie -->
    <div class="ongoing space">
        <div class="title-ongoing">
            <div class="row">
                <div class="col"><strong><h5>Movie</h5></strong></div>
            
                <div class="col"><a href="movie.php" class="button-movie">More</a>
                </div>
            </div>
        </div>
        <div class="movie-slider">
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/103385.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Fate/Grand Order: Shinsei Entaku Ryouiki Camelot 1 - Wandering; Agateram</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/106947.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Kimetsu no Yaiba Movie: Mugen Ressha-hen</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/108424.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Date A Bullet: Nightmare or Queen</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/108516.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Grisaia: Phantom Trigger The Animation - Stargazer</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/108967.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Burn the Witch</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/109743.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Kimi wa Kanata</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/86916.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Kud Wafter</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/106488.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Majo Minarai wo Sagashite</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/106737.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Monster Strike the Movie: Lucifer - Zetsubou no Yoake</div>
                </a>
            </div>
            <div class="container-ongoing container-movie">
                <a href="#">
                    <img src="{{ url('frontend') }}/assets/img/movie/108892.jpg" alt="ongoing" class="image-ongoing">
                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                    <div class="middle-ongoing middle-movie">
                        <div class="text-ongoing"><i class="fas fa-play"></i></div>
                    </div>
                <div class="movie-hover">Josee to Tora to Sakana-tachi</div>
                </a>
            </div>
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
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Action <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Comedy <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Fantasy <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Magic <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Romance <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; School <span class="right count">(15)</span></a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> &nbsp; Drama <span class="right count">(15)</span></a></li>
        </ul>
    </div>
<!-- end genre -->
</div>
@endsection