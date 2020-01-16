<aside id="left-col" class="uk-light uk-visible@m">
    <div class="left-logo uk-flex uk-flex-middle">
        <img class="custom-logo uk-align-center uk-margin-remove-bottom" src="{{asset('images/logo-color.png')}}" alt="{{config('app.name')}}">
    </div>
    <div class="left-content-box content-box-dark">
        <img src="{{asset('images/founder.jpg')}}" alt="User" class="uk-border-circle profile-img">
        <h4 class="uk-text-center uk-margin-remove-vertical text-light">
            @auth
                {{auth()->user()->name}}
            @elseauth
                else
            @endauth
        </h4>

        <div class="uk-position-relative uk-text-center uk-display-block">
            <a href="#" class="uk-text-small uk-text-muted uk-display-block uk-text-center" data-uk-icon="icon: triangle-down; ratio: 0.7">Founder/CEO</a>
            <!-- user dropdown -->
            <div class="uk-dropdown user-drop" data-uk-dropdown="mode: click; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 150">
                <ul class="uk-nav uk-dropdown-nav uk-text-left">
                    <li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
                    <li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
                    <li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span data-uk-icon="icon: sign-out"></span> Sign Out</a></li>
                </ul>
            </div>
            <!-- /user dropdown -->
        </div>
    </div>

    <div class="left-nav-wrap">
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
            <li><a href="{{route('home')}}"><span data-uk-icon="icon: home" class="uk-margin-small-right"></span>Home</a></li>
        </ul>
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
            <li class="uk-nav-header">Data</li>
            <li><a href="{{route('home')}}"><span data-uk-icon="icon: users" class="uk-margin-small-right"></span>Siswa</a></li>
            <li><a href="{{route('home')}}"><span data-uk-icon="icon: social" class="uk-margin-small-right"></span>Guru</a></li>
            <li><a href="{{route('home')}}"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>Sekolah</a></li>
            <li><a href="{{route('sekolah.kelas')}}"><span data-uk-icon="icon: commenting" class="uk-margin-small-right"></span>Kelas</a></li>
            <li class="uk-parent"><a href="#"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Templates</a>
                <ul class="uk-nav-sub">
                    <li><a title="Article" href="{{route('home')}}">Article</a></li>
                    <li><a title="Album" href="{{route('home')}}">Album</a></li>
                </ul>
            </li>
        </ul>
        <hr>
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
            <li class="uk-nav-header"><span data-uk-icon="icon: nut" class="uk-margin-small-right"></span>Testing </li>
            <li><a href="{{route('test.index')}}">Index</a></li>
            <li><a href="{{route('test.test1')}}">Test1</a></li>
            <li><a href="{{route('test.test2')}}">Test2</a></li>
        </ul>
        <div class="left-content-box uk-margin-top">
            <h5>Daily Reports</h5>
            <div>
                <span class="uk-text-small">Traffic <small>(+50)</small></span>
                <progress class="uk-progress" value="50" max="100"></progress>
            </div>
            <div>
                <span class="uk-text-small">Income <small>(+78)</small></span>
                <progress class="uk-progress success" value="78" max="100"></progress>
            </div>
            <div>
                <span class="uk-text-small">Feedback <small>(-12)</small></span>
                <progress class="uk-progress warning" value="12" max="100"></progress>
            </div>
        </div>
    </div>
    <div class="bar-bottom">
        <ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
            <li>
                <a href="{{route('home')}}" class="uk-icon-link" data-uk-icon="icon: home" title="Home" data-uk-tooltip></a>
            </li>
            <li>
                <a href="#" class="uk-icon-link" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a>
            </li>
            <li>
                <a href="#" class="uk-icon-link" data-uk-icon="icon: social"  title="Social" data-uk-tooltip></a>
            </li>
            <li>
                <a href="{{route('auth.logout')}}" class="uk-icon-link" data-uk-tooltip="Sign out" data-uk-icon="icon: sign-out"></a>
            </li>
        </ul>
    </div>
</aside>