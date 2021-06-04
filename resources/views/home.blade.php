@extends('default')
@section('title')
{{"Home"}}
@endsection

@section('content')
<article class="homeArticle">
    @if(!Auth::check())
        @include('components.welcome-new')
    @else
        @include('components.welcome-user')
    @endif
<article>
@endsection
