<form id="my_form" method="POST" action="/aanvragen/post">
    @csrf
    <input type="hidden" name="huisdier_eigenaar" value="{{$huisdier->Eigenaar->id}}">
    <input type="hidden" name="huisdier" value="{{$huisdier->id}}">
    <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
        <article class="listCard__aanvraag u-green-background u-box-shadow">
            <section class="listCard__textSection">
                <p class="listCard__text listCard__aanvraag__text">Verstuur voorstel naar {{$huisdier->Eigenaar->name}}</p>
            </section>
        </article>
    </a>
</form>