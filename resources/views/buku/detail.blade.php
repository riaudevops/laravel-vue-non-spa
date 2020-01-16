<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 22/12/2019
 * Time: 22:27
 *
 * @var string $searchQuery
 */
use App\Libs\AppHelpers;
$title = 'Rincian buku';
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
                                @include('partials.breadcrumb', ['breadcrumbs' => ['search.index' => 'Pencarian']])
                                <h4 class="page-title"><?=$title?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-box task-detail">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-book-plus"></i><small> Tambah Ke Koleksi </small>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <img class="d-flex mr-3 rounded-circle avatar-md" alt="64x64"
                                         src="{{asset('images/book-thumbnail.jpg')}}">
                                    <div class="media-body">
                                        <h4 class="media-heading mt-0">{{ $buku->judul }}</h4>
                                        <span class="badge badge-success">{{ $buku->tajuk_subjek }}</span>
                                    </div>
                                </div>

                                <h4>Ringkasan Buku</h4>

                                <p class="text-muted">
                                    (Tidak tersedia)
                                </p>

                                <div class="row mb-0 mt-2">
                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">No Induk</h5>
                                        <p> {{ $buku->no_induk_buku }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">ISBN</h5>
                                        <p> {{ $buku->ISBN != null ? $buku->ISBN : '-' }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Pengarang</h5>
                                        <p> {{ $buku->pengarang }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Penerbit</h5>
                                        <p> {{ $buku->penerbit }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Kota Terbit</h5>
                                        <p> {{ $buku->kota_terbit }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Tahun</h5>
                                        <p> {{ $buku->tahun_terbit }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Letak Buku</h5>
                                        <p> Rak {{ $buku->call_number_1 }} </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-600 m-b-5">Jumlah Eksemplar</h5>
                                        <p> {{ $buku->jumlah_eksemplar }} </p>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <p>
                                            <a id="collapseLinkDetail" class="text-info" data-toggle="collapse" href="#collapseDetail"
                                               role="button" aria-expanded="false" aria-controls="collapseDetail">
                                                Tampilkan selengkapnya
                                            </a>
                                        </p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse" id="collapseDetail">
                                            <div class="card card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="font-600">Jilid</h5>
                                                        <p> {{ $buku->jilid_ke ? "Ke-".$buku->jilid_ke : '-' }} </p>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h5 class="font-600">Edisi</h5>
                                                        <p> {{ $buku->edisi_ke ? 'Ke-'.$buku->edisi_ke : '-'}} </p>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h5 class="font-600">Cetakan</h5>
                                                        <p> {{ $buku->cetakan_ke ? "Ke-".$buku->cetakan_ke : '-' }} </p>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h5 class="font-600">Tinggi Buku</h5>
                                                        <p> {{ $buku->tinggi_buku ? $buku->tinggi_buku : '-'}} cm</p>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <h5 class="font-600">Jumlah Halaman</h5>
                                                        <p> {{ $buku->jumlah_halaman ? $buku->jumlah_halaman : '-' }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="card-box">

                                <h4 class="header-title mt-0 mb-3">Buku Terkait</h4>

                                @forelse($bukuTerkait as $buku)
                                    <div>

                                        <div class="media mb-3">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64"
                                                                  src="{{asset('images/book-thumbnail.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">{{$buku->judul}}</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    {{$buku->pengarang}}
                                                </p>
                                                <b-link href="{{route('buku.detail',['id'=>$buku->id])}}" variant="info">Lihat Buku</b-link>
                                            </div>
                                        </div>

                                    </div>
                                    @empty
                                    <p>(Tidak Tersedia)</p>
                                @endforelse

                            </div>
                        </div><!-- end col -->
                    </div>

                </div>
            </div>
        </div>

        {{--Define your javascript below--}}
        <script type="text/javascript" src="{{asset('js/buku/detail.js')}}"></script>
    </div>

@endsection
