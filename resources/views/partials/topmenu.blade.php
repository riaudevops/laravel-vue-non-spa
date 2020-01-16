<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 17/03/2019
 * Time: 16:27
 */
?>
<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{route('home')}}"><i class="mdi mdi-view-dashboard"></i>Home</a>
                </li>
                @if(App::environment('local'))
                <li class="has-submenu">
                    <a href="#"><i class="mdi mdi-developer-board"></i>Development <div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li><a href="{{route('development.html')}}" data-toggle="collapse" data-target=".navbar-collapse.show">HTML</a></li>
                        <li><a href="{{route('development.vue-component')}}">Vue component</a></li>
                    </ul>
                @endif
            </ul>
            <!-- End navigation menu -->
            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->
