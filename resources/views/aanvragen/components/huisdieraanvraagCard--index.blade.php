<article class="listCard listCard--top u-box-shadow">
    <figure class="listCard__figure">
        <img class="listCard__image" src="/{{$huisdieraanvraag->Oppas->image}}" alt="Een Foto van {{$huisdieraanvraag->Oppas->Eigenaar->name}}'s huis">
    </figure>
    <section class="listCard__textSection">
        <h2 class="listCard__heading">Verzorging {{$huisdieraanvraag->Huisdier->naam}} door {{$huisdieraanvraag->Oppas->Eigenaar->name}}</h2>
        <ul>
            <li class="listCard__text">{{$huisdieraanvraag->Oppas->adres}}</li>
        </ul>
        <p class="listCard__description">{{$huisdieraanvraag->Oppas->beschrijving}}</p>
    </section>
</article>