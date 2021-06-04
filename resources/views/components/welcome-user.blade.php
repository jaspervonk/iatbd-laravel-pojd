<section class="homeSection">
    <h1 class="homeSection__heading"> Welkom {{Auth::user()->name}}</h1>
    <p class="homeSection__text"> Wat wil je doen? </p>
    <div class="homeSection__buttonWrapper">
        <a class="homeSection__hyperlink" href="/formulier/huisdier">
            <button class="homeSection__hyperlink--button">Zoek een oppas <i class="icon-long-arrow-right"></i></button>
        </a>
        @if(Auth::user()->Oppas === null)
            <a class="homeSection__hyperlink" href="/formulier/oppas">
                <button class="homeSection__hyperlink--button">Geef je op als oppas <i class="icon-long-arrow-right"></i></button>
            </a>
        @else
            <a class="homeSection__hyperlink" href="/huisdieren">
                <button class="homeSection__hyperlink--button">Bekijk alle huisdieren <i class="icon-long-arrow-right"></i></button>
            </a>
            <a class="homeSection__hyperlink" href="/oppassers/{{Auth::user()->Oppas->id}}">
                <button class="homeSection__hyperlink--button">Bekijk jouw oppas profiel <i class="icon-long-arrow-right"></i></button>
            </a>
        @endif
        <a class="homeSection__hyperlink" href="/aanvragen">
            <button class="homeSection__hyperlink--button">Bekijk jouw reacties <i class="icon-long-arrow-right"></i></button>
        </a>
    <div>
</section>