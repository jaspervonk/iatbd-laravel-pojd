<article class="listCard__aanvraag u-box-shadow">
    <section class="listCard__textSection">
        <p class="listCard__text listCard__aanvraag__text">Geweigerd door {{$oppasaanvraag->HuisdierEigenaar->name}}</p>
    </section>
</article>
<article class="listCard__buttons">
    <form class="listCard__buttons--form" id="my_form" method="POST" action="/aanvragen/remove">
        @csrf
        <input type="hidden" name="aanvraag" value="{{$oppasaanvraag->id}}">
        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
            <article class="listCard__buttons--button u-red-background u-box-shadow">
                <section class="listCard__textSection">
                    <p class="listCard__text listCard__aanvraag__text">Verwijderen</p>
                </section>
            </article>
        </a>
    </form>
</article>