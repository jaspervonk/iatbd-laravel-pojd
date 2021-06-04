<article class="listCard__aanvraag u-yellow-background u-box-shadow">
    <section class="listCard__textSection">
        <p class="listCard__text listCard__aanvraag__text">Geaccepteerd! In behandeling</p>
    </section>
</article>
<article class="listCard__buttons">
    <form class="listCard__buttons--form" id="my_form" method="POST" action="/aanvragen/update">
        @csrf
        <input type="hidden" name="huisdier" value="{{$oppasaanvraag->Huisdier->id}}">
        <input type="hidden" name="aanvraag" value="{{$oppasaanvraag->id}}">
        <input type="hidden" name="status" value="afronden">
        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
            <article class="listCard__buttons--button u-green-background u-box-shadow">
                <section class="listCard__textSection">
                    <p class="listCard__text listCard__aanvraag__text">Afronden</p>
                </section>
            </article>
        </a>
    </form>
</article>