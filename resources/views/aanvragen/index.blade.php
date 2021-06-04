@extends('default')
@section('title')
{{"Mijn Aanvragen"}}
@endsection

@section('content')
<ul>
    @if(!count($huisdieraanvragen)>0 && !count($oppasaanvragen) > 0)
        @include('aanvragen.components.aanvragenNone--index')
    @else
        @foreach($huisdieraanvragen as $huisdieraanvraag)
            <li>
                @include('aanvragen.components.huisdieraanvraagCard--index')
                @if ($huisdieraanvraag->status === 'voorstel')
                    @include('aanvragen.components.huisdierVoorstel--index')
                @elseif ($huisdieraanvraag->status === 'geaccepteerd')
                    @include('aanvragen.components.huisdierGeaccepteerd--index')
                @elseif ($huisdieraanvraag->status === 'afronden')
                    @include('aanvragen.components.huisdierAfronden--index')
                @endif
            <li>
        @endforeach

        @foreach($oppasaanvragen as $oppasaanvraag)
            <li>
                @include('aanvragen.components.oppasaanvraagCard--index')
                @if ($oppasaanvraag->status === 'voorstel')
                    @include('aanvragen.components.oppasVoorstel--index')
                @elseif ($oppasaanvraag->status === 'geaccepteerd')
                    @include('aanvragen.components.oppasGeaccepteerd--index')
                @elseif ($oppasaanvraag->status === 'geweigerd')
                    @include('aanvragen.components.oppasGeweigerd--index')
                @elseif ($oppasaanvraag->status === 'afronden')
                    @include('aanvragen.components.oppasAfronden--index')
                @endif
            </li>
        @endforeach
    @endif
    
</ul>
@endsection