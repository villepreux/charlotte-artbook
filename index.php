<?php 

$title = "Artbook - Villepreux Charlotte";
$desc  = "Charlotte Villepreux's Artbook";
$url   = "//villepreux.net/charlotte/artbook";

?><!doctype html><html lang="en-EN" class="no-js">

    <!-- Welcome to Charlotte Villepreux's Artbook web page code source! //-->
 
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">

        <script>

            document.documentElement.className = (document.documentElement.className.replace(/\bno-js\b/, '') + ' js').trim();

            var color_scheme = localStorage.getItem("color-scheme");

            if (null !== color_scheme) {

                document.documentElement.setAttribute("data-color-scheme", color_scheme);
            }

        </script>

        <title><?= $title ?></title>

        <style>

            @layer base, artbook, utilities;

            @media screen {

                @layer artbook {

                    body {

                        > header {

                            position: sticky;
                            top: 0;

                            a {

                                color: inherit;
                                text-decoration: none;
                            }

                            h1 {

                                font-size:      3.0rem;
                                line-height:    3.0rem;
                                padding-block:  0;
                                margin-block:   0;
                            }
                        }

                        > main {

                            padding-block:  1rem;
                            padding-inline: 1rem;

                            #gallery {

                                display: grid;
                                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                                gap: 1rem;
                                align-items: stretch;

                                a { 

                                    color: inherit;

                                    scroll-margin-top: .5em;

                                    display:            flex;
                                    justify-content:    center;
                                    max-height:         calc(100vb - 1rem);
                                    max-width:          calc(100vi - 1rem);
                                    text-align:         center;

                                    img {

                                        border:     0.25rem solid white; 
                                        outline:    0.25rem solid black;
                                        max-height: inherit;
                                    }
                                                                        
                                    :has(#filter-oil:not(:checked))     &:has([data-tags~="oil"])    { display: none; }
                                    :has(#filter-pencil:not(:checked))  &:has([data-tags~="pencil"]) { display: none; }
                                    :has(#filter-color:not(:checked))   &:has([data-tags~="color"])  { display: none; }
                                    :has(#filter-b-n-w:not(:checked))   &:has([data-tags~="b-n-w"])  { display: none; }
                                    
                                    &:target {

                                        grid-column: 1 / -1;

                                        img {

                                            width:  auto;
                                            height: auto;
                                        }
                                    }

                                    &:has(img:nth-child(2)) {

                                        > img {

                                            width: min(calc(calc(100vb - 1rem) * var(--width) / var(--height)), calc(50% - .5rem));
                                            &:first-child { margin-inline-end: 1rem; }
                                        }
                                    }
                                }
                            }
                        }
                        
                        > footer {

                            position: sticky;
                            bottom: 0;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        }
                    }
                }

                @layer base {

                    /* Reset */

                    *, ::before, ::after {

                        box-sizing: border-box;

                        &[hidden] { 

                            display: none; 
                        }

                        html { 

                            body { 

                                margin: 0; 

                                h1 { font-size: 2.00rem; margin: 0.67em 0; }
                                h2 { font-size: 1.50rem; }
                                h3 { font-size: 1.17rem; }
                                h4 { font-size: 1.00rem; }
                                h5 { font-size: 0.83rem; }
                                h6 { font-size: 0.67rem; }

                                pre { white-space: pre-wrap; }

                                hr { border-style: solid; border-width: 1px 0 0; color: inherit; height: 0; overflow: visible; }

                                img, svg, video, canvas, audio, iframe, embed, object {

                                    display:        block;
                                    vertical-align: middle;
                                    max-width:      100%;

                                    &:where(img, svg, video, canvas) {

                                        height: auto;

                                        &:where(img) { 

                                            border-style: none; 
                                        }

                                        &:where(svg) { 

                                            overflow: hidden; 
                                        }
                                    }

                                    &:where(audio) {

                                        width: 100%; 

                                        &:not([controls]) { 

                                            display:none; 
                                        }
                                    }
                                }

                                source { 

                                    display: none; 
                                }

                                picture { 

                                    display: contents; 
                                }

                                article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section {

                                    display: block;
                                }

                                [type='checkbox'], [type='radio'] {

                                    box-sizing: border-box;
                                    padding: 0;
                                }
                            }
                        }
                    }

                    /* Base */

                    @view-transition { 
                        
                        navigation: auto; 
                    }

                    html { 
                        
                        interpolate-size:    allow-keywords; 
                        hanging-punctuation: first allow-end last; 
                    }

                    /* --unitless-viewport-width */

                    @property --100vw { syntax: "<length>"; initial-value: 0px; inherits: false; } 
                    :root { --100vw: 100vw; --unitless-viewport-width: tan(atan2(var(--100vw), 1px));  }

                    /* body */

                    body {
                        
                        margin: 0;
                        
                        min-height: 100svb;                
                        min-height: 100%;
                        min-height: -webkit-fill-available;
                        min-block-size: -webkit-fill-available;
                        min-block-size: stretch;

                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;                        
                    }

                    h1, h2, h3, h4, h5, h6 { 
                        
                        margin-block-start: 1.0em; 
                        margin-block-end:   0.5em; 
                    }

                    /* Images */

                    video,
                    iframe,
                    img,
                    picture,
                    figure,
                    canvas {
                        width: 100%;
                        height: auto;
                        vertical-align: middle;
                        display: inline-block;
                    }

                    video,
                    iframe,
                    img {
                        max-width: 100%;
                        aspect-ratio: calc(var(--width, 16) / var(--height, 10));
                        object-fit: cover;
                    }

                    :is(video, iframe, img).loading {
                        object-fit: none;
                    }

                    figure {
                        margin-top: 0px;
                        margin-right: 0px;
                        margin-bottom: 0px;
                        margin-left: 0px;
                    }

                    img[src*=".jpg"],
                    picture,
                    iframe {
                        background-image: url(data:image/svg+xml;base64,DQo8c3ZnIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgY2xhc3M9Imxkcy1zcGlubmVyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCIgc3R5bGU9InNoYXBlLXJlbmRlcmluZzogYXV0bzsgYW5pbWF0aW9uLXBsYXktc3RhdGU6IHJ1bm5pbmc7IGFuaW1hdGlvbi1kZWxheTogMHM7IGJhY2tncm91bmQ6IG5vbmU7Ij4NCg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDM2MCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC45cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDM5NiA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC44cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDQzMiA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC43cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDEwOCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC42cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDE0NCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC41cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDE4MCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC40cyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDIxNiA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC4zcyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDI1MiA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC4ycyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDI4OCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC4xcyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KICAgIDxnIHRyYW5zZm9ybT0icm90YXRlKDMyNCA1MCA1MCkiID48cmVjdCB4PSI0NSIgeT0iMTUiIHJ4PSIxOCIgcnk9IjYiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0iY3VycmVudENvbG9yIiA+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgdmFsdWVzPSIxOzAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMXMiIGJlZ2luPSItMC4wcyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZT48L3JlY3Q+PC9nPg0KDQo8L3N2Zz4NCg==);
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    /* Nav */

                    nav {
                        
                        ul {
                        
                            display: inline-flex;
                            gap: 1ch;
                            padding-inline-start: 0;
                            
                            li {
                                
                                list-style-type: "";
                            }
                        }
                    }

                    /* Typography */

                    :root {
                        
                        --font-family-sans-serif: Inter, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif;
                        --font-family-condensed:  "Arial Narrow", "AvenirNextCondensed-Bold", "Futura-CondensedExtraBold", HelveticaNeue-CondensedBold, "Ubuntu Condensed", "Liberation Sans Narrow", "Franklin Gothic Demi Cond", sans-serif-condensed, Arial, "Trebuchet MS", "Lucida Grande", Tahoma, Verdana, sans-serif;
                    }

                    html { 

                        hanging-punctuation: first allow-end last; 

                        -webkit-font-smoothing: antialiased; 
                        -moz-osx-font-smoothing: grayscale; 
                        
                        font-family:  var(--font-family-sans-serif); 
                        font-size:    16px;
                        line-height:  1.5;

                        body {

                            --u:  16; /* min font size      */
                            --v:  21; /* max font size      */
                            --a: 400; /* min viewport width */
                            --b: 960; /* max viewport width */
                            --f:  16; /* Root font size     */

                            font-size: clamp(var(--u), 4vw, var(--v));        
                            font-size: clamp(
                                calc(min(var(--u), var(--v)) / var(--f) * 1rem), 
                                calc(calc(calc(((var(--a) * var(--v)) - (var(--b) * var(--u))) / (var(--f) * (var(--a) - var(--b)))) * 1rem) + calc(calc((var(--u) - var(--v)) / (var(--a) - var(--b))) * 100vw)), 
                                calc(max(var(--u), var(--v)) / var(--f) * 1rem)
                                );
                            
                            text-wrap: balance;
                            text-underline-offset: 0.24em;

                            a {
                                
                                text-underline-offset: 0.2em;
                                font-weight: 600;
                            }

                            h1,h2,h3,h4,h5,h6  {
                                font-family: var(--font-family-condensed);
                            }        
                        }
                    }

                    /* Base layout */

                    body {
                        
                        min-height:     100svb;
                        display:        flex;
                        flex-direction: column;
                        align-items:    center;

                        > :is(header, main, footer) {
                        
                            padding-inline: 1rem;
                        }
                        
                        > header:has(> h1, > nav) {

                            display:        flex;
                            flex-wrap:      wrap;
                            align-items:    center;
                            gap:            1rem;

                            > h1 {

                                flex-shrink: 1;
                                margin-block: 1rem;
                            }

                            > nav {

                                flex-grow: 1;
                                text-align: end;
                            }
                        }

                        > main {

                            padding-inline:     max(1rem, calc(.5 * (100vi - 960px)));
                            padding-block-end:  1em;
                            width:              100%;
                        }
                        
                        &:has(header, details) {
                            
                            align-items: start;
                            
                            > :is(header, main, footer) {

                                width: 100%;
                            }
                            
                            > main {

                                flex-grow: 1;
                            }
                        }
                    }

                    details {

                        summary {
                            
                            cursor: pointer;

                            h1,h2,h3,h4,h5,h6, header {

                                display: inline-block;
                            }

                            h1,h2,h3,h4,h5,h6 {

                                margin-block: 1rem;
                                line-height: 1;
                            }
                        }
                    }

                    /* External links pictogram */

                    a:not(:has(img,picture,video,audio,svg,iframe)):is([href^="//"],[href^="http"]):after {

                        display: inline-block;
                        content: "";

                        background-color: currentColor;
                        mask: url('data:image/svg+xml;utf8,<svg height="1024" width="768" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M640 768H128V257.90599999999995L256 258V128H0v768h768V576H640V768zM384 128l128 128L320 448l128 128 192-192 128 128V128H384z"/></svg>');
                        mask-size: cover;

                        position: relative;
                        width: 0.6em;
                        height: 0.75em;
                        top: 0em;
                        left: 0.2em;
                        margin-right: 0.33em;

                        opacity: 0.4;
                    }

                    /* Color scheme */

                    :root {

                        color-scheme: light dark; 

                        --background-color-1: light-dark(#dddddd, #000000);
                        --background-color-2: light-dark(#e8e7e6, #101111);
                        --background-color-3: light-dark(#f5f4f3, #1a1b1b);
                        --background-color-4: light-dark(#ffffff, #222222);

                        --text-color-1: light-dark(#222222, #dddddd);
                        --text-color-2: light-dark(#1a1b1b, #e8e7e6);
                        --text-color-3: light-dark(#101111, #f5f4f3); 
                        --text-color-4: light-dark(#000000, #ffffff); 
                    }

                    html {

                        color-scheme: light dark;

                        &:has(input[id="light"]:checked) { color-scheme: light; }
                        &:has(input[id="dark"]:checked)  { color-scheme: dark;  }
                        
                        background-color: var(--background-color-2);
                        color:            var(--text-color-2);
                        scrollbar-color:  var(--text-color-1) var(--background-color-2);
                        
                        h1 { color: var(--text-color-4); }
                        h2 { color: var(--text-color-3); }
                        h3 { color: var(--text-color-2); }
                        
                        body:has(header) {

                        > header { background-color: var(--background-color-3); }
                        > main   { background-color: var(--background-color-2); }
                        > footer { background-color: var(--background-color-1); }

                        }
                    }

                    /* Layering & shadows */

                    body:has(header) {

                        > header { z-index:  1; }
                        > main   { z-index:  0; } /*
                        > footer { z-index: -1; } */

                        > header,
                        > main,
                        > main :is(article, details, aside, card, .card, .grid > *) { 

                            box-shadow: 0 0 8px 0px light-dark(#0006, #000); 
                        }
                    }

                    /* User preferences */

                    @media (prefers-reduced-motion) {

                        *,
                        ::before,
                        ::after {

                            animation: none !important;
                        }
                    }
                }
            }

            @media not screen {

                :root {

                    color-scheme: light;
                }

                form {

                    display: none;
                }                            
            }

            @layer utilities {

                [hidden] {

                    content: none;
                    display: none !important;
                }

                .visually-hidden:not(:focus):not(:active) {

                    clip:           rect(0 0 0 0);
                    clip-path:      inset(50%);
                    height:         1px;
                    overflow:       hidden;
                    position:       absolute;
                    white-space:    nowrap;
                    width:          1px;
                    margin:         0;
                    padding:        0;
                }
            }

        </style>

        <meta http-equiv="x-ua-compatible"  content="IE=edge">

        <meta name="title"                  content="<?= $title ?>">
        <meta name="name"                   content="<?= $title ?>">
        <meta name="description"            content="<?= $desc ?>">
        <meta name="keywords"               content="Artbook">
        <meta name="author"                 content="Charlotte Villepreux">
        <meta name="copyright"              content="Chartlotte & Antoine Villepreux">
        <meta name="fediverse:creator"      content="@villapirorum@indieweb.social">
        <meta name="format-detection"       content="telephone=no">

        <meta name="theme-color"            content="#000" media="(prefers-color-scheme: light)" >
        <meta name="theme-color"            content="#000" media="(prefers-color-scheme: dark)"  >
        <meta name="view-transition"        content="same-origin">
        <meta name="color-scheme"           content="dark light">

        <meta name="geo.region"             content="FR-75">
        <meta name="geo.placename"          content="Paris">
        <meta name="geo.position"           content="48.862808;2.348237">
        <meta name="ICBM"                   content="48.862808, 2.348237">

        <meta property="og:title"           content="<?= $title ?>">
        <meta property="og:description"     content="<?= $desc ?>">
        <meta property="og:site_name"       content="villapirorum.netlify.app">
        <meta property="og:image"           content="artbook-villepreux-charlotte.png">
        <meta property="og:url"             content="<?= $url ?>">
        <meta property="og:type"            content="website">

        <meta name="og:title"               content="<?= $title ?>">
        <meta name="og:description"         content="<?= $desc ?>">
        <meta name="og:site_name"           content="villapirorum.netlify.app">

        <meta itemprop="name"               content="<?= $title ?>">
        <meta itemprop="description"        content="<?= $desc ?>">

        <meta name="DC.title"               content="<?= $title ?>">
        <meta name="DC.format"              content="text/html">
        <meta name="DC.language"            content="fr-FR">

        <meta name="twitter:card"           content="summary_large_image">
        <meta name="twitter:url"            content="<?= $url ?>">
        <meta name="twitter:title"          content="<?= $title ?>">
        <meta name="twitter:description"    content="<?= $desc ?>">
        <meta name="twitter:image"          content="artbook-villepreux-charlotte.png">

        <meta name="application-name"       content="artbook-villepreux-charlotte">

        <meta name="msapplication-TileColor" content="#000">
        <meta name="msapplication-TileImage" content="artbook-villepreux-charlotte.png">

        <link rel="icon"        href="artbook-villepreux-charlotte-portrait-icon.png" type="image/png">
        <link rel="manifest"    href="manifest.json">

    </head>

    <body>

        <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "Person",
            "name": "Charlotte Villepreux",
            "url": "\/\/villepreux.net\/charlotte\/artbook",
            "sameAs": [
                "https:\/\/www.pinterest.com\/charlotte.villepreux",
                "https:\/\/www.instagram.com\/charlotte.villepreux\/"
            ]
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "Organization",
            "name": "<?= $desc ?>",
            "url": "\/\/villepreux.net\/charlotte\/artbook",
            "logo": "artbook-villepreux-charlotte.png.jpg"
        }
        </script>

        <header>
            <a href="#"><h1 id="artbook">Charlotte's Artbook</h1></a>
            <nav>
                <form>
                    <label for="filter-oil">    <input type="checkbox" id="filter-oil"    checked></input> Oil    </label>
                    <label for="filter-pencil"> <input type="checkbox" id="filter-pencil" checked></input> Pencil </label>
                    <label for="filter-color">  <input type="checkbox" id="filter-color"  checked></input> Color  </label>
                    <label for="filter-b-n-w">  <input type="checkbox" id="filter-b-n-w"  checked></input> B&W    </label>
                </form>
            </nav>
            
        </header>

        <main class="content" id="main">

            <section id="gallery">

                <?php

                    foreach ([

                        "2024-05-10" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-01" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-02" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-03" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-04" => [ [ "tags" => [ "pencil", "color" ], ] ], 
                        "2024-08-05" => [ [ "tags" => [ "pencil", "color" ], ] ], 
                        "2024-08-06" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-07" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-08" => [ [ "tags" => [ "pencil", "color" ], ] ], 
                        "2024-08-09" => [ [ "tags" => [ "pencil", "b-n-w" ], ] ], 
                        "2024-08-10" => [ [ "tags" => [ "pencil", "color" ], ] ], 
                        "2024-08-11" => [ [ "tags" => [ "pencil", "color" ], ] ], 
                        "2024-08-12" => [ [ "tags" => [ "pencil", "color" ], "file" => "*-a",  ], [ "file" => "*-b", "tags" => [ "pencil", "color" ] ] ],
                        "2024-08-13" => [ [ "tags" => [ "pencil", "color" ], ] ],
                        "2024-08-14" => [ [ "tags" => [ "pencil", "color" ], ] ],
                        "2024-08-15" => [ [ "tags" => [ "pencil", "color" ], ] ],
                        "2024-08-16" => [ [ "tags" => [ "pencil", "color" ], ] ],
                        "2024-08-17" => [ [ "tags" => [ "pencil", "color" ], ] ],
                        "2024-08-18" => [ [ "tags" => [ "pencil", "b-n-w" ], "file" => "*-a",  ], [ "file" => "*-b", "tags" => [ "pencil", "b-n-w" ] ] ],
                        "2024-08-19" => [ [ "tags" => [ "pencil", "b-n-w" ], "file" => "*-a",  ], [ "file" => "*-b", "tags" => [ "pencil", "b-n-w" ] ] ],
                        "2024-08-20" => [ [ "tags" => [ "pencil", "color" ], "file" => "*-a",  ], [ "file" => "*-b", "tags" => [ "pencil", "b-n-w" ] ] ],
                        "2024-12-10" => [ [ "tags" => [ "oil",    "color" ], "file" => "*-a",  ], [ "file" => "*-b", "tags" => [ "oil",    "color" ] ] ],
         
                        ] as $id => $pages) {

                ?><a id="<?= $id ?>" href="#<?= $id ?>"><?php

                    $w = 1 == count($pages) ? 344 : 172;
                    $h = 256;

                    foreach ($pages as $page) {

                        $name = isset($page["file"]) ? str_replace("*", $id, $page["file"]) : $id;
                        $tags = array_merge([ "all" ], $page["tags"]);
            
                        ?><img loading="lazy" width="<?= $w ?>px" height="<?= $h ?>px" style="--width: <?= $w ?>; --height: <?= $h ?>;" srcset="media/800/<?= $name ?>.avif 400w, media/1600/<?= $name ?>.avif 800w, media/3200/<?= $name ?>.avif 1600w" src="media/800/<?= $name ?>.avif" data-tags="<?= implode(" ", $tags) ?>"><?php
                    }

                ?></a>
                <?php } ?>

            </section>

        </main>

        <footer>
            <p>© <a href="mailto:charlotte.villepreux@gmail.com">Charlotte Villepreux</a> 2024-2025</p>
            <p>Work in progress</p>
        </footer>

        <a href="https://pixelfed.social/villepreux/"    target="_blank" hidden="hidden" rel="me">Pixelfed </a>
        <a href="https://mastodon.social/@villapirorum/" target="_blank" hidden="hidden" rel="me">Mastodon </a>
        <a href="https://github.com/villepreux"          target="_blank" hidden="hidden" rel="me">Github   </a>

    </body>

</html>