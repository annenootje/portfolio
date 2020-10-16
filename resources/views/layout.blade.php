<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>Anne Noteboom</title>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="/" class='logo'>
                    @include('/icons/logo')
                    {{-- <img src="/img/logo.svg" alt=""> --}}
                </a>
                <p class="site-title"><b>{{$title ?? ''}}</b></p>
                <div class="right">
                    <a class="button cirkel" href="mailto:info@annenoteboom.nl">
                        @include('/icons/mail')
                    </a>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <main id="app">
            @yield('content')
        </main>

        <footer class="footer-large">

            @if( Request::is('/*') || Request::is('projecten*') )

                <div class="container">
                    <div class="link">
                        <a href="/diensten" class="part">
                            @include('icons/arrow-left')
                            <span>Diensten</span>
                        </a>
                        <a href="/diensten" class="part">
                            @include('icons/arrow-left')
                            <span>Diensten</span>
                        </a>
                    </div>
                    <a class="center" href="/projecten">&nbsp;</a>
                    <div class="link right">
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                    </div>
                </div>

            @elseif( Request::is('diensten*') )

                <div class="container">
                    <div class="link">
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                    </div>
                    <a class="center" href="/contact"><b class="red">Interesse of meer info?</b></a>
                    <div class="link right">
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                    </div>
                </div>

            @elseif( Request::is('project/*') )

                <div class="container">
                    <div class="link">
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                    </div>
                    <a class="center" href="/contact"><b class="red">Meer informatie?</b></a>
                    <div class="link right">
                        <a href="{{$project->link}}" class="part">
                            <span>Bekijk website</span>
                            @include('icons/arrow-right')
                        </a>
                        <a href="{{$project->link}}" class="part">
                            <span>Bekijk website</span>
                            @include('icons/arrow-right')
                        </a>
                    </div>
                </div>

            @elseif( Request::is('over*') )

                <div class="container">
                    <div class="link">
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                        <a href="/projecten" class="part">
                            @include('icons/arrow-left')
                            <span>Projecten</span>
                        </a>
                    </div>
                    <a class="center" href="/contact">&nbsp;</a>
                    <div class="link right">
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                        <a href="/contact" class="part">
                            <span>Contact</span>
                            @include('icons/arrow-right')
                        </a>
                    </div>
                </div>

            @elseif( Request::is('contact*') )

                <div class="container">
                    <div class="link">
                        <a onClick="window.history.back()" class="part">
                            @include('icons/arrow-left')
                            <span>Terug</span>
                        </a>
                        <a href="/diensten" class="part">
                            @include('icons/arrow-left')
                            <span>Terug</span>
                        </a>
                    </div>
                    <a class="center">&nbsp;</a>
                </div>

            @endif

        </footer>

        <footer class="footer-small">
            <div class="container">
                <div class="part-12">
                    <img src="/img/logo-white.svg" alt="">
                </div>
                <div class="part-12">
                    <a class="{{Request::is('/*') ? 'active' : ''}}" href="/">Home</a>
                <div class="part-12">
                    <a class="{{Request::is('project*') ? 'active' : ''}}" href="/projecten">Projecten</a>
                </div>
                <div class="part-12">
                    <a class="{{Request::is('diensten*') ? 'active' : ''}}" href="/diensten">Diensten</a>
                </div>
                <div class="part-12">
                    <a class="{{Request::is('over*') ? 'active' : ''}}" href="/over-mij">Over mij</a>
                </div>
                <div class="part-12">
                    <a class="{{Request::is('contact*') ? 'active' : ''}}" href="/contact">Contact</a>
                </div>
            </div>
        </footer>

        <div class='mobile-menu'>
            <div class="container">
                <nav>
                    <a class="{{Request::is('/*') ? 'active' : ''}}" href="/">Home</a>
                    <a class="{{Request::is('project*') ? 'active' : ''}}" href="/projecten">Projecten</a>
                    <a class="{{Request::is('diensten*') ? 'active' : ''}}" href="/diensten">Diensten</a>
                    <a class="{{Request::is('over*') ? 'active' : ''}}" href="/over-mij">Over mij</a>
                    <a class="{{Request::is('contact*') ? 'active' : ''}}" href="/contact">Contact</a>
                </nav>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="/js/app.js"></script>
</html>