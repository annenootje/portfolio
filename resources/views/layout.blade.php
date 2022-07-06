<!DOCTYPE html>
<html lang="NL">
    
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113963563-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-113963563-1');
        </script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Voor al uw websites, websites en webapps">
        <meta name="keywords" content="Anne Noteboom, website, webdesigner, webapplicatie, webshop"/>
        <meta name="author" content="Anne Noteboom"/>
        <meta name="copyright" content="Anne Noteboom"/>
        <meta name="robots" content="index"/>

        <title>Anne Noteboom | Websitemaker</title>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" type="image/svg+xml" href="/img/favicon.svg">
        <link rel="alternate icon" href="/favicon.ico">
        <link rel="mask-icon" href="/img/favicon.svg" color="black">
    </head>

    <body>
        <main>
            <header class="header">
                <div class="container">
                    <div class="header__logo">
                        <img src="/img/logo.svg" alt="">
                        <p>ANNE NOTEBOOM <span>// WEBCREATOR</span></p>
                    </div>
                    <nav>
                        <a href="#intro">Intro</a>
                        <a href="#werk">Werk</a>
                        <a href="#contact">Contact</a>
                    </nav>
                </div>
            </header>
            @yield('content')
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> Anne Noteboom</p>
        </footer>
    </body>

    <script type="text/javascript" src="/js/app.js"></script>

</html>