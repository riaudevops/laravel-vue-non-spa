<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 09/04/2019
 * Time: 11:35
 */
use App\Libs\AppHelpers;
$title = 'Regisster';
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
                </div>
                <form class="uk-form-stacked" method="post" action="{{route('auth.register')}}">
                    @csrf
                    <div class="uk-margin uk-light">
                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input name="name" class="uk-input uk-border-pill" type="text" placeholder="Nama lengkap" id="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        @if ($errors->has('name'))
                            <div class="uk-alert-warning" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ $errors->first('name') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="uk-margin uk-light">
                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input uk-border-pill" type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        @if ($errors->has('email'))
                            <div class="uk-alert-warning" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="uk-margin uk-light">
                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input name="password" class="uk-input uk-border-pill" type="password" placeholder="Password" required>
                        </div>
                        @if ($errors->has('password'))
                            <div class="uk-alert-warning" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ $errors->first('password') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="uk-margin uk-light">
                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input name="password_confirmation" class="uk-input uk-border-pill" type="password" placeholder="Konfirmasi password" required>
                        </div>
                    </div>
                    <div class="uk-margin uk-light">
                        <div class="uk-margin-remove" uk-grid>
                            <div class="uk-width-1-6 uk-padding-remove">
                                <input name="term-condition" class="uk-checkbox" type="checkbox" id="term-conditions" required>
                            </div>
                            <div class="uk-width-5-6 uk-padding-remove">
                                <label for="term-conditions">{{__('Saya memahami')}} <a href="#">{{__('syarat dan ketentuan')}}</a></label>
                            </div>
                        </div>
                        @if ($errors->has('term-conditions'))
                            <div class="uk-alert-warning" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ $errors->first('term-conditions') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="uk-margin uk-light">
                        <button class="uk-button uk-button-primary uk-width-1-1 uk-border-pill">{{__('Login')}}</button>
                    </div>

                </form>
                <div class="uk-text-small uk-text-center uk-light">
                    {{__('Sudah terdaftar?')}} <a href="{{route('auth.login')}}">{{__('Log in')}}</a>
                </div>
            </div>
            <div class="uk-position-bottom-center uk-visible@s uk-light">
                <span class="uk-text-small"><span>&copy; 2018 - {{date('Y')}}</span> by SmartGuru Indonesia</span>
            </div>
        </div>
    </div>
@endsection
