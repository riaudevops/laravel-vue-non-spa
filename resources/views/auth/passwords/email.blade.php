<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 09/04/2019
 * Time: 11:52
 */
use App\Libs\AppHelpers;
$title = 'Lupa password';
$appendTitle = AppHelpers::appendTitle($title, true);
?>

@extends('layouts.app')
@section('title', $appendTitle)
@section('content')
    <div class="uk-cover-container uk-background-secondary">
        <img sizes="100vw" data-src="{{asset('images/bg.png')}}" alt="" data-uk-cover data-uk-img>

        <div class="uk-position-cover uk-overlay-primary"></div>
        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-position-relative uk-position-z-index">
            <div class="uk-width-medium uk-padding-small" uk-scrollspy="cls: uk-animation-fade">
                <div class="uk-text-center uk-margin">
                    <img src="{{asset('images/logo-color.png')}}" width="200" alt="Logo">
                    @if (session('status'))
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="uk-text-center uk-width-medium@s uk-margin-auto uk-light">Masukkan alamat email dan kami akan mengirimkan link reset password Anda.</p>
                    <form class="uk-form-stacked" method="post" action="{{route('password.email')}}">
                        @csrf
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1 uk-light">
                                <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
                                <input  name="email" class="uk-input uk-border-pill" placeholder="E-mail" required type="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <div class="uk-alert-warning" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <p>{{ $errors->first('email') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="uk-margin uk-light">
                            <button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Kirim link ke email</button>
                        </div>
                        <div class="uk-text-small uk-light">
                            Sudah terdaftar? <a class="uk-link-text" href="{{route('auth.login')}}"> Login</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="uk-position-bottom-center uk-visible@s uk-light">
                <span class="uk-text-small"><span>&copy; 2018 - {{date('Y')}}</span> by SmartGuru Indonesia</span>
            </div>
        </div>
    </div>
@endsection

