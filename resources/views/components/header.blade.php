<header class="header">
        <a class="header__logo" href="/">POJD</a>
        <nav class="header__nav">
            <div id="js--menuButton" class="header__nav__menu">
                <div class="header__nav__menuLine"></div>
                <div class="header__nav__menuLine"></div>
                <div class="header__nav__menuLine"></div>
            </div>
            <ul id="js--navList" class="header__nav__list">
                <li class="header__nav__listItem"><a href="/huisdieren">Huisdieren</a></li>
                <li class="header__nav__listItem"><a href="/oppassers">Oppassers</a></li>
                <li class="header__nav__listItem"><a href="/aanvragen">Mijn Reacties</a></li>
                @if(Auth::check())
                    <li class="header__nav__listItem">
                        <form id="uitloggen" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        <a href="javascript:{}" onclick="document.getElementById('uitloggen').submit()">Uitloggen</a>
                    </li>

                @else
                    <li class="header__nav__listItem"><a href="/login">Inloggen</a></li>
                @endif
            </ul>
        </nav>
    </header>