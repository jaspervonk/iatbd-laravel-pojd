<article class="listCard__aanvraag listCard--top u-box-shadow">
    <section class="listCard__textSection">
        <p class="listCard__text listCard__aanvraag__text">Plaats een beoordeling voor {{$huisdieraanvraag->Oppas->Eigenaar->name}}</p>
    </section>
</article>
<article class="listCard__buttons u-grey-background">
    <form class="listCard__buttons--form" id="my_form" method="POST" action="/aanvragen/complete">
        @csrf
        <input type="hidden" name="aanvraag" value="{{$huisdieraanvraag->id}}">
        <input type="hidden" name="huisdier_eigenaar" value="{{$huisdieraanvraag->HuisdierEigenaar->id}}">
        <input type="hidden" name="huisdier_soort" value="{{$huisdieraanvraag->Huisdier->Soort->soort}}">
        <input type="hidden" name="huisdier" value="{{$huisdieraanvraag->Huisdier->id}}">
        <input type="hidden" name="oppas" value="{{$huisdieraanvraag->oppas}}">
        <input class="listCard_buttons--textArea" required type="text-area" name="beoordeling" value="" placeholder="Typ uw beoordeling...">
        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
            <article class="listCard__buttons--button u-green-background u-box-shadow">
                <section class="listCard__textSection">
                    <p class="listCard__text listCard__aanvraag__text">Plaatsen en Afronden</p>
                </section>
            </article>
        </a>
    </form>
</article>