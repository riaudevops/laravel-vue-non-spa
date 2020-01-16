<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 09/04/2019
 * Time: 11:52
 */
use App\Libs\AppHelpers;
$title = 'Reset password';
$appendTitle = AppHelpers::appendTitle($title, true);
?>
@extends('layouts.app')
@section('title', $appendTitle)
@section('content')
    <div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade uk-height-viewport uk-background-cover uk-background-norepeat uk-background-fixed" style="background-image: url({{asset('images/bg.png')}});">
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@s">
                        <div class="uk-margin uk-width-1-3@m uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <div class="uk-text-center uk-margin-medium-bottom"><img src="{{asset('images/logo-color.png')}}" align="SmartGuru" width="150" uk-img></div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div>
                                <h3 class="uk-card-title uk-text-center">{{__('Reset password')}}</h3>
                                <form class="uk-form-stacked" method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                            <input name="email" class="uk-input" type="email" placeholder="Alamat email" value="{{ $email ?? old('email') }}" required autofocus>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="uk-alert-warning" uk-alert>
                                                <a class="uk-alert-close" uk-close></a>
                                                <p>{{ $errors->first('email') }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input name="password" class="uk-input" type="password" placeholder="Password" required>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div class="uk-alert-warning" uk-alert>
                                                <a class="uk-alert-close" uk-close></a>
                                                <p>{{ $errors->first('password') }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-form-controls uk-width-1-1@s">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input name="password_confirmation" class="uk-input" type="password" placeholder="Konfirmasi password" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <button class="uk-button uk-button-primary uk-button-large tm-button-default uk-width-1-1@s">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection