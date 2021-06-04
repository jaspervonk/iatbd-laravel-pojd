@extends('default')
@section('title')
{{"Huisdieren"}}
@endsection

@section('content')
<ul>
    @if($huisdieren->isEmpty())
        @include('huisdieren.components.huisdierNone--index')
    @else
        @include('huisdieren.components.huisdierFilter--index')
        
        @foreach($huisdieren as $huisdier)
            <li class="Huisdier" data-soort={{$huisdier->soort}}>@include('huisdieren.components.huisdierCard--index')</li>
        @endforeach
    @endif
</ul>
@endsection

@section('javascript')
<script type="text/javascript" src="/js/huisdierfilter.js"></script>
@endsection