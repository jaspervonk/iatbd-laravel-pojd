@extends('default')
@section('title')
{{"Formulier Oppas"}}
@endsection

@section('content')
<form class="orderForm" action="/formulier/oppas/post" method="POST">
    @csrf
    <section class="orderForm__formSection">
        <h2 class="orderForm__formSection__heading"> Oppas Formulier </h2>
        <article class="orderForm__formSection__form">
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="adres">Adres</label>
                <input class="orderForm__formSection__formSet__input" type="text" name="adres" value="" placeholder="Jantjelaan 49" required aria-label="Vul je adres in">
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="image">Foto Huis</label>
                <select class="orderForm__formSection__formSet__input" name="image" aria-label="Selecteer een foto van je huis">
                <option value="" disabled selected hidden></option>
                @foreach($images as $image)
                <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
                </select>
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="beschrijving">Beschrijving</label>
                <textarea class="orderForm__formSection__formSet__input u-big-input" type="text-area" name="beschrijving" placeholder="Typ hier de beschrijving" required aria-label="Enter your Postal Code"></textarea>
            </div>
        </article>
    </section>
    <div class="orderForm__formSection__options">
        <button class="orderForm__formSection__optionsButton" onclick="window.location.href='/'">Annuleren</button>
        <button class="orderForm__formSection__optionsButton orderForm__formSection__optionsButton--red" type="submit" name="button">Inschrijven</button>
    </div>
</form>
@endsection