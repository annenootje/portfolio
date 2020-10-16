@extends('layout')

@section('content')

    <div class='loader'>
        <span></span>
        <span></span>
    </div>

    <section class="line center full-height">
        <div class="home-slider">
                
            <div class="container business-card-container slide  white-line">
                <div class='business-card' data-tilt data-tilt-scale="1.01" data-tilt-max="20">
                    <div class="business-card-side business-card-right"></div>
                    <div class="business-card-side business-card-left"></div>
                    <div class="business-card-side business-card-bottom"></div>
                    <div class="business-card-side business-card-top"></div>
                    <div class="business-card-side business-card-front">
                        <div class="top">
                            {{-- <img src="/img/logo.png" alt=""> --}}
                            <div class="text-right">
                                <h2>Anne Noteboom</h2>
                                <a href="mailto:info@annenoteboom.nl">info@annenoteboom.nl</a>
                            </div>
                        </div>
                        <h1 class="bottom">Welkom</h1>
                    </div>
                </div>
            </div>

            @include('./components/project_previews')

        </div>
    </section>
@endsection