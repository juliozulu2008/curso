@extends('site.layout')
@section('title', 'JCDSOFT')
@section('content')

    <div class="row container">
        <div class="col s12 center-align">
            <p class="flow-text">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class=" col s12 divider"></div>
        <p>&nbsp;</p>
        {{-- Card-1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[imagem]" title="JCDSOFT cusos"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, veniam?</p>
                </div>
                <div class="card-action">
                    <a href="#" class="purple-text">saiba mais</a>
                </div>
            </div>
        </div>
        {{-- Card-2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[imagem]" title="JCDSOFT cusos"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, veniam?</p>
                </div>
                <div class="card-action">
                    <a href="#" class="purple-text">saiba mais</a>
                </div>
            </div>
        </div>
        {{-- Card-3 --}}
        <div class="col s12 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[imagem]" title="JCDSOFT cusos"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, veniam?</p>
                </div>
                <div class="card-action">
                    <a href="#" class="purple-text">saiba mais</a>
                </div>
            </div>
        </div>



    </div>
    <p>&nbsp;</p>
    <div class="row container">

    </div>
    <div class="col s12">
        <div class="divider"></div>
    </div>
    <p>&nbsp;</p>
    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text light justify">Lorem ipsum dolor sit amet.</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eos illum quod. Itaque sint nihil est
                temporibus consequatur quos earum. Debitis earum nesciunt sapiente iure modi perferendis sed, assumenda
                deserunt autem praesentium! Enim minus, a ducimus libero non reiciendis maiores veniam, omnis impedit ut
                soluta saepe recusandae optio, illum necessitatibus.
            </p>
            <p class="flow-text justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fugit ut in omnis obcaecati tempora magnam
                dolores praesentium a ipsum.
            </p>
            <p>
                <a href="#!" class="waves-effect waves-light btn btn-small purple">Saiba mais</a>
                <a href="#!" class="waves-effect waves-light btn btn-small green ">Cadastre-se</a>
            </p>
        </section>
    </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/parallax.jpg') }}" alt="[image]" title="JcdCursos" class="responsive-img">
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/teams/team-1.jpg') }}" alt="[imagem]" title="jcdsoft" class="responsive-img circle">
            <p class="flow-text">Ana</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, recusandae!</p>
            <p>
                <a href="#!"><i class="small purple-text fa-brands fa-facebook"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-whatsapp"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-instagram"></i></a>
            </p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/teams/team-2.jpg') }}" alt="[imagem]" title="jcdsoft" class="responsive-img circle">
            <p class="flow-text">Jorge</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, recusandae!</p>
            <p>
                <a href="#!"><i class="small purple-text fa-brands fa-facebook"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-whatsapp"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-instagram"></i></a>
            </p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/teams/team-3.jpg') }}" alt="[imagem]" title="jcdsoft" class="responsive-img circle">
            <p class="flow-text">Lisa</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, recusandae!</p>
            <p>
                <a href="#!"><i class="small purple-text fa-brands fa-facebook"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-whatsapp"></i></a>
                <a href="#!"><i class="small purple-text fa-brands fa-instagram"></i></a>
            </p>
        </div>
    </div>

@endsection
