@extends('site.layout')
@section('title', 'SERVIÇOS')
@section('content')

    <div class="row container">
        <div class="col s12 l6 push-l3 center-align">
            <h1 class="flow-text black-text">Nossos Serviços</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, a! Asperiores, itaque unde beatae esse
                consectetur ipsa soluta fugiat nihil!</p>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 l6">
            <div class="row">

                <div class="col s12 l6 center-align hoverable">
                    <i class="fa-solid fa-house-laptop medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deserunt iusto rerum porro modi
                        velit inventore eveniet temporibus excepturi ex?</p>
                </div>

                <div class="col s12 l6 center-align hoverable">
                    <i class="fa-solid fa-shield-halved medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deserunt iusto rerum porro modi
                        velit inventore eveniet temporibus excepturi ex?</p>
                </div>

                <div class="col s12 l6 center-align hoverable">
                    <i class="fa-solid fa-highlighter medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deserunt iusto rerum porro modi
                        velit inventore eveniet temporibus excepturi ex?</p>
                </div>

                <div class="col s12 l6 center-align hoverable">
                    <i class="fa-solid fa-microchip medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deserunt iusto rerum porro modi
                        velit inventore eveniet temporibus excepturi ex?</p>
                </div>

            </div>{{-- Final de Linha --}}
        </div>
        <div class="col s12 l6">
            <img src="{{ asset('images/team-work.jpg') }}" alt="[imagem]" title="Jcdssoft"
                class="responsive-img materialboxed hoverable">
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 center-align">
            <h1 class="flow-text black-text">Planos</h1>
        </div>
        <p>&nbsp;</p>

        {{-- Card-1 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-sack-dollar medium green-text"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Basic R$89,90</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo dignissimos voluptates voluptas porro,
                        veniam iusto delectus? Excepturi et delectus accusantium.</p>
                </div>
                <div class="card-action">
                    <a href="#!" class="purple-text">Saiba Mais!</a>
                </div>
            </div>
        </div>
        {{-- Card-2 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-money-bills medium blue-text"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Business R$189,90</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo dignissimos voluptates voluptas porro,
                        veniam iusto delectus? Excepturi et delectus accusantium.</p>
                </div>
                <div class="card-action">
                    <a href="#!" class="purple-text">Saiba Mais!</a>
                </div>
            </div>
        </div>
        {{-- Card-3 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-landmark medium yellow-text"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Enterprise R$389,90</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo dignissimos voluptates voluptas porro,
                        veniam iusto delectus? Excepturi et delectus accusantium.</p>
                </div>
                <div class="card-action">
                    <a href="#!" class="purple-text">Saiba Mais!</a>
                </div>
            </div>
        </div>
    </div>





@endsection
