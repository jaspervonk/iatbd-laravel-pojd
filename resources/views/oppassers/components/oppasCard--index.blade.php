<a href="/oppassers/{{$oppas->id}}">
    <article class="listCard u-box-shadow">
        <figure class="listCard__figure">
            <img class="listCard__image" src="/{{$oppas->image}}" alt="Een Foto van {{$oppas->Eigenaar->name}}'s huis">
        </figure>
        <section class="listCard__textSection">
            <h2 class="listCard__heading">{{$oppas->Eigenaar->name}}</h2>
            <ul>
                <li class="listCard__text">{{$oppas->adres}}</li>
            </ul>
            <p class="listCard__description">{{$oppas->beschrijving}}</p>
        </section>
    </article>
</a>