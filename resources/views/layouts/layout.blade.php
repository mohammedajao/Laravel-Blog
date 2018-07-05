<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LSAPP') }}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    	@include('includes.navbar')
    	<div class="container mt-5" id="app">
            @include('includes.messages')
    		@yield('content')
    	</div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            if($('#article-ckeditor').length > 0){
               CKEDITOR.replace('article-ckeditor');
            }﻿
        </script>
    </body>
</html>
