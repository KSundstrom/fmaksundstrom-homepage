<?php
  $haystack = isset($_SERVER['HTTP_ACCEPT']) ? strtolower($_SERVER['HTTP_ACCEPT']) : null;
  $needle = 'application/xhtml+xml';
  $position = strpos($haystack, $needle);
  if($position !== false) {
    header('Content-Type: application/xhtml+xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="utf-8" ?>' . chr(0x0a);
  } else {
    header('Content-Type: text/html; charset=utf-8');
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="sv-FI" xml:lang="sv-FI" dir="ltr">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--
      K. Sundström
      Copyright 2016–2021 Kasper Sundström. Alla rättigheter förbehållna. All rights reserved.
    -->

    <title>K. Sundström</title>

    <meta name="robots" content="index, follow"/>
    <meta name="description" content="K. Sundström erbjuder flexibel konsultering och undervisning i redovisning, skattefrågor, organisationsjuridik, kommunikation, översättning, copy, design, webb och ADB."/>
    <meta name="keywords" content="Kasper, Sundström, flexibel, konsultering, undervisning, redovisning, bokföring, skatt, juridik, organisationer, kommunikation, korrespondens, översättning, språk, copy, design, webb, ADB, IKT"/>
    <meta name="creator" content="Kasper Sundström"/>
    <meta name="publisher" content="Kasper Sundström"/>
    <meta name="application-name" content="K. Sundström"/>
    <meta name="apple-mobile-web-app-title" content="K. Sundström"/>
    <meta name="theme-color" content="#a1bf37"/>

    <link rel="author" type="text/plain" hreflang="en-GB" href="humans.txt"/>
    <link rel="license" type="text/plain" hreflang="en-GB" href="COPYRIGHT.txt"/>
    <link rel="help" type="text/markdown" hreflang="en-GB" href="README.md"/>
    <link rel="manifest" type="application/manifest+json" href="manifest.webmanifest"/>
    <link rel="canonical" href="http://ksundstrom.fi/"/>

    <!-- Icons -->
    <!-- <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="icon/apple-touch-icon.png"/> -->
    <!-- <link rel="mask-icon" type="image/svg+xml" href="inc/ico/safari-pinned-tab.svg"/> -->
    <link rel="icon" type="image/png" href="inc/ico/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="inc/ico/favicon-16x16.png" sizes="16x16"/>

    <!-- Open Graph -->
    <meta property="og:title" content="K. Sundström"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://ksundstrom.fi/img/logo.png"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>
    <meta property="og:url" content="http://ksundstrom.fi/"/>
    <meta property="og:description" content="K. Sundström erbjuder flexibel konsultering och undervisning i redovisning, skattefrågor, organisationsjuridik, kommunikation, översättning, copy, design, webb och ADB."/>

    <!-- Bootstrap 4.6.1 CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"/>

    <!-- Custom CSS and font imports -->
    <link rel="stylesheet" type="text/css" href="inc/css/main.css"/>

    <!-- jQuery Core 3.6.0 -->
    <script defer="defer" type="application/javascript" charset="utf-8" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4.6.1 JavaScript Bundle -->
    <script defer="defer" type="application/javascript" charset="utf-8" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Custom JavaScript -->
    <script defer="defer" type="application/javascript" charset="utf-8" src="inc/js/main.js"></script>

    <!-- JSON-LD -->
    <script type="application/ld+json">
      //<![CDATA[
        {
          "@context": "https://schema.org/",
          "@type": "LocalBusiness",
          "name": "K. Sundström",
          "legalName": "Fma K. Sundström",
          "description": "K. Sundström erbjuder flexibel konsultering och undervisning i redovisning, skattefrågor, organisationsjuridik, kommunikation, översättning, copy, design, webb och ADB.",
          "logo": "",
          "image": "",
          "areaServed": {
            "@type": "AdministrativeArea",
            "name": "EU"
          },
          "url": "http://ksundstrom.fi/",
          "email": "mailto:kasper@ksundstrom",
          "telephone": "tel:+358407471640",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Hitisgränden 3 A 3",
            "postalCode": "00300",
            "addressLocality": "Helsingfors",
            "addressCountry": "FI"
          },
          "founder": {
            "@type": "Person",
            "name": "Kasper Sundström"
          }
        }
      //]]>
    </script>

    <!-- Google Analytics -->
    <script type="application/javascript">
      //<![CDATA[
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-48814688-1', 'auto');
        ga('send', 'pageview');
      //]]>
    </script>
  </head>
  <body vocab="https://schema.org/" typeof="LocalBusiness">

    <!-- OBSOLETE BROWSER WARNING -->
    <!--[if lt IE 10]>
      <div class="alert alert-danger text-center" role="alert">
        <p>
          <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
          Du använder en föråldrad webbläsare (Internet Explorer 9 eller äldre). Vänligen <a href="http://browsehappy.com/" class="alert-link">ladda ner en modern webbläsare</a>.
        </p>
      </div>
    <![endif]-->

    <!-- HEADER -->
    <header class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="display-3">
          K. Sundström
        </h1>
        <p class="lead">
          till din tjänst
        </p>
      </div>
    </header>

    <!-- MAIN -->
    <main>
      <div class="container">

        <!-- SECTION -->
        <section>
          <div class="row text-center">
            <div class="col">
              <hr/>
              <p>
                Flexibel konsultering och undervisning i redovisning, skattefrågor, organisationsjuridik, kommunikation, översättning, copy, design, webb och ADB.
              </p>
              <hr/>
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <div class="col text-right">
              <address>
                Fma K. Sundström<br/>
                Hitisgränden 3 A 3<br/>
                FI-00300 HELSINGFORS<br/>
                FINLAND
              </address>
            </div>
            <div class="col text-left">
              <p>
                <a href="mailto:kasper%40ksundstrom.fi" title="E-post">kasper@ksundstrom.fi</a><br/>
                <a href="tel:+358407471640" title="Telefon">+358-40-7471640</a><br/>
                FO-nummer 2578454-2<br/>
                Ej momsreg.
              </p>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- FOOTER -->
    <footer>
      <div class="container text-center">
        <hr/>
        <p class="small text-muted">
          © 2016–<?php echo date('Y', getlastmod()); ?> Kasper Sundström.
          Senast uppdaterad <?php echo date('Y-m-d', getlastmod()); ?>.
          <span lang="en-GB" xml:lang="en-GB">Framework by <a hreflang="en-US" href="https://getbootstrap.com/">Bootstrap</a>.</span>
        </p>
      </div>
    </footer>
  </body>
</html>
