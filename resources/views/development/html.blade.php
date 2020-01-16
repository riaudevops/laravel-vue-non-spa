<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/12/2019
 * Time: 20:05
 */

use App\Libs\AppHelpers;

$title = 'Development with HTML';
$appendTitle = AppHelpers::appendTitle($title, true);
?>
@extends($appLayout)

@section('title', $appendTitle)

@section('main_content')
    <div class="main_content_app d-none">
        <div id="app">
            <div class="wrapper">
                <div class="container-fluid">
                    <!-- Page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                @include('partials.breadcrumb', ['breadcrumbs' => ['buku.search' => 'Pencarian']])
                                <h4 class="page-title"><?=$title?></h4>
                            </div>
                        </div>
                    </div>

                    <!-- page content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <p>Halamat ini menggunakan HTML tanpa Vue Component</p>
                            </div>
                            <p>Nama Controller <code>DevelopmentController</code></p>
                            <p>Nama Function <code>html</code></p>
                            <p>
                                Utk merender tampilan (view) harus memanggil function <code>$this->renderPage($request, $view, $data)</code>. Lihat di <code>app/Http/Controllers/Controller.php</code>
                            </p>
                            <p>View file <code>/resources/views/devepment/html.blade.php</code></p>
                            <p>Bagian utama sebuah view adalah</p>
                            <code>title, extend, section title, section main_content. </code> Lihat struktur file view yang diberi tanda (comment). Anda hanya perlu mengubah "JUDUL", content HTML diantara <em>"PageContent" (mulai baris ke-32)</em> hingga <em>"End Page Content"</em> dan menambahkan file javascript yang diberi tanda <em>"Javascript"</em>
                            <p>Js file <code>/public/js/devepment/html.js</code></p>
                            <pre>
                                function initVue() {
                                    var vm = new Vue({
                                        el: '#app',
                                        data: {
                                        },
                                        mounted: function () {
                                            if(typeof pjax !== 'undefined'){
                                                pjax.refresh();
                                            }
                                        },
                                        components: {
                                        }
                                    });
                                    $('.app-placeholder').addClass('d-none');
                                    $('.main_content_app').removeClass('d-none');
                                }
                                try{
                                    initVue();
                                }catch (e) {
                                    window.location.reload();
                                }

                            </pre>
                        </div>
                    </div>
                    <!-- end page content -->
                </div>
            </div>
        </div>

        {{--Javascripts--}}
        <script type="text/javascript" src="{{asset('js/development/html.js')}}"></script>
        {{--End Javascripts--}}
    </div>
@endsection
