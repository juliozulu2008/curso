<nav class="purple">
    <div class="nav-wrapper container">
        {{-- menu hamburger mobile --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <a href="{{ route('home') }}" class="brand-logo ligth">JCDSOFT</a>

        {{-- Menu Para Desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('galeria') }}">GALERIA</a></li>
            <li><a href="{{ route('servicos') }}">SERVIÇOS</a></li>
            <li><a href="{{ route('contato') }}">CONTATO</a></li>
        </ul>
        {{-- Menu Mobile --}}
        <ul id="slide-out" class="sidenav hoverable">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{ asset('images/sidenavimage.jpg') }}"alt="[imagem]" title="JCDSOFT">
                        </div>
                        <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                        <a href="#name"><span class="white-text name">JCDSOFT</span></a>
                        <a href="#email"><span class="white-text email">jcdsoft@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="{{ route('home') }}"><i class="material-icons black-text">home</i> HOME</a></li>
                <li><a href="{{ route('galeria') }}"><i class="material-icons black-text">photo_library</i>GALERIA</a></li>
                <li><a href="{{ route('servicos') }}"><i class="material-icons black-text">build</i>SERVIÇOS</a></li>
                <li><a href="{{ route('contato') }}"><i class="material-icons black-text">contact_phone</i>CONTATO</a></li>
        </ul>
    </div>
</nav>
