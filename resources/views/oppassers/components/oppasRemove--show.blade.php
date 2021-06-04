<form id="my_form" method="POST" action="/oppassers/remove">
    @csrf
    <input type="hidden" name="oppas" value="{{$oppas->id}}">
    <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
        <article class="listCard__aanvraag u-red-background u-box-shadow">
            <section class="listCard__textSection">
                <p class="listCard__text listCard__aanvraag__text">Blokkeer {{$oppas->Eigenaar->name}}</p>
            </section>
        </article>
    </a>
</form>