@extends('layout')

@section('content')

<div class="cursor"></div>

    <section class="section --intro">
        <div class="container">
            <h1>Voor <span>websites</span>, <span>webshops</span> en
                <span>web apps</span> met een tintje magie
                </h1>
        </div>
    </section>

    <section class="section --projects">
        <div class="container">
            <div class="slider__controls">
                <div class="slider__control -prev">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="slider__control -next">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="slider" data-tilt data-tilt-scale="1" data-tilt-max="3">
                <div class="slider__inner">
                    <div class="slider__item -coquelicots" style="background-image: url('/img/portfolio/coquelicots.png')">
                        {{-- <p class="-uppercase">Website</p>
                        <h2>Coquelicots</h2> --}}
                    </div>
                    <div class="slider__item -huis-van-mijn">
                        <p class="-uppercase">Webshop</p>
                        <h2>Studio Huis van Mijn</h2>
                    </div>
                </div>
            </div>
            <div class="slider__action">
                <span>01</span>
                <span class="line">
                    <span class="control"></span>
                </span>
                <span>07</span>
            </div>
        </div>
    </section>

    <section class="section --contact">
        <div class="container">
            <div class="card__container" data-tilt data-tilt-scale="1.01" data-tilt-max="10">
                <div onClick="location.href='mailto:info@annenoteboom.nl'" class="card" data-modal="contact">
                    <div class="card__inner">
                        <div class="card__front">
                            <img src="/img/logo.svg" alt="logo Anne Noteboom">
                        </div>
                        <div class="card__back">
                            <div class="card__back__inner">
                                <div class="card__image">
                                    <img src="/img/logo.svg" alt="logo Anne Noteboom">
                                    <img src="/img/hello.svg" alt="">
                                </div>
                                <div class="card__content">
                                    <h2>Anne Noteboom</h2>
                                    <a href="mailto:info@annenoteboom.nl">info@annenoteboom.nl</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <a class="link" data-modal="projects" href="mailto:info@annenoteboom.nl">
        <span class="link__item">Contact opnemen?</span>
        <div class="link__inner">
            <span class="link__item">Contact opnemen?</span>
        </div>
    </a>

    <div onClick="window.open('https://www.ek-balgevoel.nl', '_blank');" class="notification">
        <div class="notification__inner">
            <p>🎉🎉</p>
            <h6 class="notification__title">Nieuw project online!</h6>
            <p class="notification__text"><a target="_blank" href="https://www.ek-balgevoel.nl">Bekijk ek-balgevoel.nl</a></p>
        </div>
    </div> --}}

    {{-- <div class="modal modal--projects" data-modal="projects">
        <div class="modal__cross">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="modal__inner">
            HALLOOOO
        </div>
    </div>

    <div class="modal modal--contact" data-modal="contact">
        <div class="modal__inner">
            <h1>Neem contact op</h1>
        </div>
    </div> --}}

@endsection