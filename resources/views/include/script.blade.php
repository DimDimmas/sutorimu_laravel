<!-- jQuery -->
<script src="{{ url('frontend') }}/assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="{{ url('frontend') }}/assets/js/bs/bootstrap.min.js"></script>
<!-- fontawesome -->
<script src="{{ url('frontend') }}/assets/js/fa/all.min.js"></script>
<!-- slick -->
<script type="text/javascript" src="{{ url('frontend') }}/assets/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.ongoing-slider').slick({
            dots: false,
            autoplay: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
    });
</script>
<script>
    $('.movie-slider').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
</script>