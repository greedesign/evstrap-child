<?php

add_action( 'wp_head', 'evstrap_child_load_fonts' ); 
function evstrap_child_load_fonts() { 
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            families: ['Roboto', 'Roboto Slab:700']
        },
        custom: {
            families: ['Bebus Neue']
        }
    });
    </script>
    <?php /*<!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com --> 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" as="fetch" crossorigin="anonymous"> 
    <script type="text/javascript">
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Roboto+Slab:700",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
    </script>
    <!-- End of code snippet for Google Fonts -->*/?>
    <?php
}