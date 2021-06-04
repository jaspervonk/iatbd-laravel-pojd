@extends('default')
@section('title')
{{"Oppassers"}}
@endsection

@section('content')
<ul>
    @if($oppassers->isEmpty())
        @include('oppassers.components.oppasNone--index')
    @endif
    @foreach($oppassers as $oppas)
        @include('oppassers.components.oppasCard--index')
    @endforeach
</ul>
@endsection