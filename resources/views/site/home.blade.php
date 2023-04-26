@extends('site.layout')
@section('title', 'HOME')
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
                <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[imagem]" title="JCDSOFT cusos" class="responsive-img materialboxed">
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
                <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[imagem]" title="JCDSOFT cusos" class="responsive-img materialboxed">
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
                <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[imagem]" title="JCDSOFT cusos" class="responsive-img materialboxed">
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
<div class="row container"></div>
    <div class="col s12">
        <div class="divider"></div>
    </div>
<p>&nbsp;</p>
<div class="row container">
    <div class="col s12">
        <h1 class="flow-text light"></h1>
    </div>
</div>



</div>





@endsection
