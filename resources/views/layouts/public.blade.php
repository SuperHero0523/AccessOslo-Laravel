<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" ng-app="accessosloApp">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> @yield('title')</title>
    <meta property="og:url" content="https://accessoslo.fantasylab.io" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Access Oslo - Executive Handling & FBO" />
    <meta property="og:description" content="Access Oslo Executive Handling is all about taking care of passengers and crew needs. We always aim to exceed their expectations and to create a unique experience for each visit." />
    <meta property="og:image" content="{{ url('https://accessoslo.fantasylab.io/assets/img/logo.jpg') }}" />
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logoaccessoslo.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/accessoslo.no.css">
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/countrySelect.min.css">
    <link rel="stylesheet" href="/css/wickedpicker.min.css">
    <link rel="stylesheet" href="/css/star-rating-svg.css">
    <link rel="stylesheet" href="/css/modal-loading.css">
    <link rel="stylesheet" href="/css/modal-loading-animate.css">
    <link rel="stylesheet" href="/css/jquery.slide.css">
    <link rel="stylesheet" href="/css/loading-btn.css">
    <link rel="stylesheet" href="/css/loading.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>var config = @json($configuration); config.server = "<?= route("accessoslo-api", [],false) ?>/"; config.token = "<?= csrf_token() ?>"; var BASE_URL = "{{ url('/') }}";</script>
</head>

<body class="accessoslo {{$page}}" @isset($ngApp) ng-app="{{$ngApp}}" @endisset>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    @include('elements.header') @yield('content') @include('elements.footer')    
    <script src="/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>   
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:911194,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c7d6d6e96ec580017cff0de&product=inline-share-buttons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>    
    <script src="/js/vendor/bootstrap3-typeahead.js"></script>
    <script src="/js/vendor/moment.min.js"></script>
    <script src="/js/vendor/sweetalert.min.js"></script>
    <script src="/js/vendor/countrySelect.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
    <script src="https://use.fontawesome.com/551be509ec.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>var user = @json(auth()->user());</script>
    <script src="/js/ng.accessoslo.min.js"></script>
    <script src="/js/sticky.js"></script>
    @yield('scripts')
</body>

</html>