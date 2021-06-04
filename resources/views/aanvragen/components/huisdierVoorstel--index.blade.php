<article class="listCard__aanvraag u-box-shadow">
    <section class="listCard__textSection">
        <p class="listCard__text listCard__aanvraag__text">{{$huisdieraanvraag->Oppas->Eigenaar->name}} wil graag op {{$huisdieraanvraag->Huisdier->naam}} passen! Gaat u hiermee akkoord?</p>
    </section>
</article>
<article class="listCard__buttons">
    <form class="listCard__buttons--form" id="my_form" method="POST" action="/aanvragen/update">
        @csrf
        <input type="hidden" name="huisdier" value="{{$huisdieraanvraag->Huisdier->id}}">
        <input type="hidden" name="aanvraag" value="{{$huisdieraanvraag->id}}">
        <input type="hidden" name="status" value="geaccepteerd">
        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
            <article class="listCard__buttons--button u-green-background u-box-shadow">
                <section class="listCard__textSection">
                    <p class="listCard__text listCard__aanvraag__text">Accepteren</p>
                </section>
            </article>
        </a>
    </form>
    <form class="listCard__buttons--form" id="my_form2" method="POST" action="/aanvragen/update">
        @csrf
        <input type="hidden" name="huisdier" value="{{$huisdieraanvraag->Huisdier->id}}">
        <input type="hidden" name="aanvraag" value="{{$huisdieraanvraag->id}}">
        <input type="hidden" name="status" value="geweigerd">
        <a href="javascript:{}" onclick="document.getElementById('my_form2').submit();">
            <article class="listCard__buttons--button u-red-background u-box-shadow">
                <section class="listCard__textSection">
                    <p class="listCard__text listCard__aanvraag__text">Weigeren</p>
                </section>
            </article>
        </a>
    </form>
</article>