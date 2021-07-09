<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sutorimu - @yield('title')</title>

        @include('include.style')

        

    </head>
    <body>
        @include('include.navbar')

        <div class="container-fluid" style="margin-top: 2%;">
            <div class="row">
                @yield('content')
            </div>
        </div>
        
        @include('include.footer')

        <div class="back-top"><i class="fas fa-chevron-up"></i></div>

        @include('include.script')
    </body>
    
<script type="text/javascript">
    var $backToTop = $(".back-top");
    $backToTop.hide();
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
        $backToTop.fadeIn();
        } else {
        $backToTop.fadeOut();
        }
    });

    $backToTop.on('click', function(e) {
        $("html, body").animate({scrollTop: 0}, 500);
    });
</script>
</html>
