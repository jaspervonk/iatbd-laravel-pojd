<h1 class="listCard__heading listCard__heading--second"> Filters </h1>
<section class="filterSection">
    @foreach($soorten as $soort)
        <section id="{{$soort->soort}}wrapper" class="filterSection__wrapper filterSection__wrapperActive"> 
            <label class="filterSection__label" for="{{$soort->soort}}">{{$soort->soort}}</label>
            <input class="filterSection__input" id="{{$soort->soort}}" name="{{$soort->soort}}" type="checkbox"/>
        </section>
    @endforeach
</section>