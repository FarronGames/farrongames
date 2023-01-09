<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ef4d48" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<header>
        <div class="logo"><a href="/"><img src="/img/logo_farrongames.svg"></a></div>
        <div class="menu">
            <div class="enlaces">
                <div class="categorias">
                    <div class="enlace-inicio"><a href="/">INICIO</a></div>  
                    <div class="enlace-categorias">
                      <a href='#'>JUEGOS DE MESA<x-fluentui-chevron-down-16 /></a>
                      <ul class="submenu animate">
                        <li><x-gmdi-family-restroom-o /><a href="#">Familiares</a></li>
                        <li><x-gmdi-child-care-o /><a href="#">Para niños</a></li>
                        <li><x-fluentui-brain-circuit-24-o /><a href="#">Para adultos</a></li>
                        <li><x-gmdi-looks-two-o /><a href="#">Para dos</a></li>
                        <li><x-iconoir-hexagon-dice /><a href="#">De rol</a></li>
                        <li><x-fluentui-playing-cards-20-o /><a href="#">De cartas</a></li>
                        <li><x-phosphor-strategy-bold /><a href="#">De estrategia</a></li>
                        <li><x-fluentui-chess-20-o /><a href="#">Clásicos</a></li>
                        <li><x-fluentui-handshake-32-o /><a href="#">Cooperativos</a></li>
                      </ul>
                    </div>
                    <div><a href='#'>CONTACTO</a></div>
                </div>
                <div class="footer-menumobile">
                  <div class="linea-header"></div>
                  <img src="/img/logo_farrongames.svg">
                </div>
            </div>
            <div class="hamburguesa">
                <!-- MENU TOGGLE BUTTON -->
               <a href="#nav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
                   <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                   <title>Toggle Menu</title>
                   <g>
                       <line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5"/>
                       <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
                       <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
                       <line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5"/>
                       <circle class="menuicon__circle" r="23" cx="25" cy="25" />
                   </g>
                   </svg>
               </a>
           </div>
        </div>
        <!-- ANIMATED BACKGROUND ELEMENT -->
        <div class="splash"></div>
</header>