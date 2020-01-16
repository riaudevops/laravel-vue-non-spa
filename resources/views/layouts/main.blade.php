<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta name="description" content="{{config('app.name_long')}}">
        <meta name="keywords" content="{{config('app.keywords')}}">
        <meta name="author" content="{{config('app.author')}}">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('title', config('app.name'))</title>
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
        <script type="text/javascript" src="{{asset('js/uikit.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vuikit.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vee-validate/vee-validate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vuikit-icons.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    </head>
    <body>
    <header id="top-head" class="uk-position-fixed">
        <div class="uk-container uk-container-expand uk-background-primary">
            <nav class="uk-navbar uk-light" data-uk-navbar="mode:click; duration: 250">
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item uk-hidden@m">
                        <a class="uk-logo" href="{{route('home')}}"><img class="custom-logo" src="{{asset('images/logo-color.png')}}" alt=""></a>
                    </div>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="#">Accounts</a></li>
                        <li>
                            <a href="#">Settings <span data-uk-icon="icon: triangle-down"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">YOUR ACCOUNT</li>
                                    <li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
                                    <li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
                                    <li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><span data-uk-icon="icon: sign-out"></span> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@s">
                        <form action="" class="uk-search uk-search-default">
                            <span data-uk-search-icon></span>
                            <input class="uk-search-input search-field" type="search" placeholder="Search">
                        </form>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#" data-uk-icon="icon:user" title="Your profile" data-uk-tooltip></a></li>
                        <li><a href="#" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a></li>
                        <li><a href="{{route('auth.logout')}}" data-uk-icon="icon:  sign-out" title="Sign Out" data-uk-tooltip></a></li>
                        <li><a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav" title="Offcanvas" data-uk-tooltip></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @include('partials.leftmenu')
    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            @yield('main_content')
            @include('partials.placeholder')
            @include('partials.footer')
        </div>
    </div>

    @include('partials.offcanvas')

    <script type="text/javascript" src="{{asset('js/uikit-icons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pjax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vee-validate/id.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.serializeToJSON.min.js')}}"></script>
    <script type="text/javascript">
        var pjax;
        document.addEventListener('pjax:send', function(){
            $('.main_content_app').addClass('uk-hidden');
            $('.app-placeholder').removeClass('uk-hidden');
        });
        document.addEventListener('pjax:error', function(){
           pjax.reload();
        });
        document.addEventListener("DOMContentLoaded", function() {
            pjax = new Pjax({
                selectors: [
                    "title",
                    ".main_content_app"
                ],
                timeout: 3000,
                cacheBust : false,
                //debug: true
            });
        });
        $(document).ready(function(){
            var appUrl = location.protocol+'//'+location.hostname+''+location.pathname;
            if(appUrl.endsWith('/')){
                appUrl = appUrl.substring(0, appUrl.length  - 1);
            }
            $('#left-col li a[href="'+appUrl+'"]').parent('li').first().addClass('uk-active');
            $('#left-col li').click(function(){
                if($(this).children('a').length > 0){
                    $('li').removeClass("uk-active");
                    $(this).addClass("uk-active");
                }
            });
        });
    </script>
    </body>
</html>
