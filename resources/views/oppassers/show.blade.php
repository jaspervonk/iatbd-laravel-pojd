@extends('default')
@section('title')
{{$oppas->Eigenaar->name}}
@endsection

@section('content')
    @include('oppassers.components.oppasCard--show')
    @if($admin !== null)
        @if(Auth::id() === $admin->admin)
            @include('oppassers.components.oppasRemove--show')
        @endif
    @endif
    <h1 class="listCard__heading listCard__heading--second"> Beoordelingen </h1>
    @if($reviews->isEmpty())
        @include('oppassers.components.reviewNone--show')
    @else
        @foreach($reviews as $review)
            @include('oppassers.components.reviewCard--show')
        @endforeach
    @endif
@endsection