@extends('default')
@section('title')
{{"Formulier Huisdier"}}
@endsection

@section('content')
<form action="/formulier/huisdier/post" method="POST" class="orderForm">
    @csrf
    <section class="orderForm__formSection">
        <h2 class="orderForm__formSection__heading"> Huisdier Formulier </h2>
        <article class="orderForm__formSection__form">
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="naam">Naam</label>
                <input class="orderForm__formSection__formSet__input" type="text" name="naam" value="" required aria-label="Vul je naam in">
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="soort">Soort Huisdier</label>
                <select class="orderForm__formSection__formSet__input" name="soort" aria-label="Selecteer je soort huisdier">
                <option value="" disabled selected hidden></option>
                @foreach($soorten as $soort)
                <option value="{{$soort->soort}}">{{$soort->soort}}</option>
                @endforeach
                </select>
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="oppasdatum">Oppasdatum</label>
                <input class="orderForm__formSection__formSet__input" type="date" name="oppasdatum" value="" placeholder="JJJJ-MM-DD" required aria-label="Vul hier de oppasdatum in">
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="oppasdagen">Aantal oppasdagen</label>
                <input class="orderForm__formSection__formSet__input" type="number" name="oppasdagen" aria-label="Vul hier het aantal oppasdagen in">
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="dagtarief">Dagtarief</label>
                <input class="orderForm__formSection__formSet__input" type="number" step=".01" name="dagtarief" placeholder="€4,50" aria-label="Vul hier het dagtarief in">
            </div>
        </article>
    </section>
    <section class="orderForm__formSection">
        <h2 class="orderForm__formSection__heading"> Extra informatie </h2>
        <article class="orderForm__formSection__form">
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="beschrijving">Beschrijving</label>
                <textarea class="orderForm__formSection__formSet__input u-big-input" type="text-area" name="beschrijving" placeholder="Typ hier de beschrijving" required aria-label="Enter your Postal Code"></textarea>
            </div>
            <div class="orderForm__formSection__formSet">
                <label class="orderForm__formSection__formSet__label" for="image">Foto Huisdier</label>
                <select class="orderForm__formSection__formSet__input" name="image" aria-label="Selecteer een foto voor je huisdier">
                <option value="" disabled selected hidden></option>
                @foreach($images as $image)
                <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
                </select>
            </div>
        </article>
    </section>
    <div class="orderForm__formSection__options">
    <button class="orderForm__formSection__optionsButton" onclick="window.location.href='/'">Annuleren</button>
        <button class="orderForm__formSection__optionsButton orderForm__formSection__optionsButton--red" type="submit" name="button">Inschrijven</button>
    </div>
</form>
@endsection