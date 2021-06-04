@extends('default')
@section('title')
{{$huisdier->naam}}
@endsection

@section('content')
@include('huisdieren.components.huisdierCard--show')
@if ($huisdier->Eigenaar->id !== $user_id && $admin === null)
    @include('huisdieren.components.voorstelButton--show')
@else
    @include('huisdieren.components.aanvraagButton--show')
@endif
@if($admin !== null)
    @if(Auth::id() === $admin->admin)
        @include('huisdieren.components.huisdierRemove--show')
    @endif
@endif
@endsection