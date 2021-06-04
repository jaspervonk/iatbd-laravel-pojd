<article class="listCard listCard--top listCard--top u-box-shadow">
    <figure class="listCard__figure">
        <img class="listCard__image" src="/{{$oppasaanvraag->Huisdier->image}}" alt="Een Foto van {{$oppasaanvraag->Huisdier->naam}}">
    </figure>
    <section class="listCard__textSection">
        <h2 class="listCard__heading">{{$oppasaanvraag->Huisdier->naam}}</h2>
        <ul>
            <li class="listCard__text">{{$oppasaanvraag->Huisdier->soort}}: €{{$oppasaanvraag->Huisdier->uurtarief}}/uur</li>
            <li class="listCard__text">vanaf {{$oppasaanvraag->Huisdier->oppasdatum}} voor {{$oppasaanvraag->Huisdier->aantal_dagen}} dag(en)</li>
        </ul>
        <p class="listCard__description">{{$oppasaanvraag->Huisdier->beschrijving}}</p>
    </section>
</article> 
