<article class="listCard listCard--comment">
    <section class="listCard__textSection">
        <h2 class="listCard__heading">{{$review->HuisdierEigenaar->name}}</h2>
        <ul>
            <li class="listCard__text">{{$review->huisdier}} ({{$review->huisdier_soort}})</li>
        </ul>
        <p class="listCard__description">{{$review->beoordeling}}</p>
    </section>
</article>