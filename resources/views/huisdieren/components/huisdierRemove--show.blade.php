<form id="my_form2" method="POST" action="/huisdieren/remove">
    @csrf
    <input type="hidden" name="huisdier" value="{{$huisdier->id}}">
    <a href="javascript:{}" onclick="document.getElementById('my_form2').submit();">
        <article class="listCard__aanvraag u-red-background u-box-shadow">
            <section class="listCard__textSection">
                <p class="listCard__text listCard__aanvraag__text">Verwijder {{$huisdier->naam}}</p>
            </section>
        </article>
    </a>
</form>