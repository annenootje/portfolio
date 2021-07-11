@extends('layout')

@section('content')

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
                            <h1>Anne Noteboom</h1>
                            <a href="mailto:info@annenoteboom.nl">info@annenoteboom.nl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="link" data-modal="projects" href="mailto:info@annenoteboom.nl">
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
    </div>

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