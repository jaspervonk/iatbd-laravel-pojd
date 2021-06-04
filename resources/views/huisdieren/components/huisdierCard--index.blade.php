<a href="/huisdieren/{{$huisdier->id}}">
    <article class="listCard u-box-shadow">
        <figure class="listCard__figure">
            <img class="listCard__image" src="/{{$huisdier->image}}" alt="Een Foto van {{$huisdier->naam}}">
        </figure>
        <section class="listCard__textSection">
            <h2 class="listCard__heading">{{$huisdier->naam}}</h2>
            <ul>
                <li class="listCard__text">van {{$huisdier->Eigenaar->name}}</li>
                <li class="listCard__text">{{$huisdier->soort}}: €{{$huisdier->dagtarief}}/dag</li>
                <li class="listCard__text">vanaf {{$huisdier->oppasdatum}} voor {{$huisdier->aantal_dagen}} dag(en)</li>
            </ul>
            <p class="listCard__description">{{$huisdier->beschrijving}}</p>
        </section>
    </article>
</a>
