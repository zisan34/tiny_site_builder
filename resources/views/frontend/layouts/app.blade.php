<!doctype html>
<html lang="en">
  <head>
    <!-- Developed By : Fazlul Kabir(fazlulkabir34@gmail.com) -->
    <!-- In guidence of : Abdur Rob -->
    <!-- In collaboration with : Imran Ahmed, Saimun Hossain -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$HEADER_FOOTERS ? $HEADER_FOOTERS->title : env('APP_NAME')}}</title>
    <link rel="shortcut icon" href="{{ asset($LOGOS ? $LOGOS->primary : 'frontend/images/LogoMakr_41Vlo9.png' ) }}" />

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/custom.css') }}">


    @stack('css_lib')

    @stack('css_custom')

    <style type="text/css">
        .affix {
          position: fixed;
          top: 0;
          right: 0;
          left: 0;
          z-index: 1030;
        }

        /* fixed to top styles */
        .affix.navbar {
          background-color: #333;
        }
        .navbar .container-fluid > div {
            border-bottom: 1px solid #e6e6e6;
            background-color: white;
        }
    </style>

  </head>
  <body>
    

    <div class="wrap">
    
    @include('frontend.partial.header')
    <!-- END header -->
    
    @yield('content')
  


    @include('frontend.partial.footer')
    <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{URL::asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{URL::asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.stellar.min.js')}}"></script>

    
    <script src="{{ asset('frontend/js/lightbox.min.js') }}"></script>
    <script src="{{URL::asset('frontend/js/main.js')}}"></script>

    @stack('js_lib')

    @stack('js_custom')
    
    <script>


        const SITE_URL = "{{url('')}}";

        function setImgUrl(){
            let images = $('img');

            $.each(images, function(index, image){
                src = image.getAttribute('src');
                src = src.replace('###', SITE_URL);
                image.setAttribute('src', src);
            });

        }

        function getSplitContent (content, word_limit) {
            var contnetWords = "";
            var max_length = (content.length > word_limit) ? word_limit : content.length;
            for (i = 0; i < max_length; i++) 
            {
              contnetWords += content[i] + " ";
            }


            if(content.length > word_limit)
            {
                contnetWords += content[max_length] + "...";
            }
            // console.log(contnetWords.length);

            return contnetWords;
        }

        function setVisitorLog(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const curent_url = SITE_URL + "{{$_SERVER['REQUEST_URI']}}";

            $.post(SITE_URL + '/vistorlog', {'curent_url' : curent_url});
        }

        $(document).ready(function() {

            setImgUrl();


            var toggleAffix = function(affixElement, scrollElement, wrapper) {
            // console.log(affixElement.find('button'));
            if(window.innerWidth >= 1024)
            {

                var footer_height = $('footer').offset().top;

                var height = affixElement.outerHeight(),
                    top = wrapper.offset().top;
                
                if (scrollElement.scrollTop() >= top && scrollElement.scrollTop()+height-50 < footer_height){
                    wrapper.height(height);
                    affixElement.addClass("affix");
                }
                else {
                    affixElement.removeClass("affix");
                    wrapper.height('auto');
                }
              
            }
          };
          

          $('[data-toggle="affix"]').each(function() {
            var ele = $(this),
                wrapper = $('<div></div>');
            
            ele.before(wrapper);
            $(window).on('scroll resize', function() {
                toggleAffix(ele, $(this), wrapper);
            });
            
            // init
            toggleAffix(ele, $(window), wrapper);
          });


            var getInfoWords = $('.info').text().split(" ");
            $('.info').text(getSplitContent(getInfoWords, 70));
      
            setImgUrl();

            setVisitorLog();

        });

    </script>

  </body>
</html>