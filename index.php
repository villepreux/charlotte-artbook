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
            <?php foreach (@file("css/all.css") as $line) echo "            $line"; ?>

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
        <meta property="og:image"           content="media/artbook-villepreux-charlotte.png">
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
        <meta name="twitter:image"          content="media/artbook-villepreux-charlotte.png">

        <meta name="application-name"       content="media/artbook-villepreux-charlotte">

        <meta name="msapplication-TileColor" content="#000">
        <meta name="msapplication-TileImage" content="media/artbook-villepreux-charlotte.png">

        <link rel="icon"        href="media/artbook-villepreux-charlotte-portrait-icon.png" type="image/png">
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
            "logo": "media/artbook-villepreux-charlotte.png"
        }
        </script>

        <header>
            <a href="#"><h1 id="artbook">Charlotte's Artbook</h1></a>
            <nav>
                <form>
                    <label for="filter-alcohol"> <input type="checkbox" id="filter-alcohol" checked></input> Alcool </label>
                    <label for="filter-pencil">  <input type="checkbox" id="filter-pencil"  checked></input> Pencil </label>
                    <label for="filter-color">   <input type="checkbox" id="filter-color"   checked></input> Color  </label>
                    <label for="filter-b-n-w">   <input type="checkbox" id="filter-b-n-w"   checked></input> B&W    </label>
                </form>
            </nav>
            
        </header>

        <main>

            <section id="gallery">

                <?php

                    foreach ([

                        "2024-05-10" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-01" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-02" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-03" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-04" => [ [ "tags" => [ "pencil",  "color" ], ] ], 
                        "2024-08-05" => [ [ "tags" => [ "pencil",  "color" ], ] ], 
                        "2024-08-06" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-07" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-08" => [ [ "tags" => [ "pencil",  "color" ], ] ], 
                        "2024-08-09" => [ [ "tags" => [ "pencil",  "b-n-w" ], ] ], 
                        "2024-08-10" => [ [ "tags" => [ "pencil",  "color" ], ] ], 
                        "2024-08-11" => [ [ "tags" => [ "pencil",  "color" ], ] ], 
                        "2024-08-12" => [ [ "tags" => [ "pencil",  "color" ], "file" => "*-a",  ], [ "tags" => [ "pencil", "color" ], "file" => "*-b", ] ],
                        "2024-08-13" => [ [ "tags" => [ "pencil",  "color" ], ] ],
                        "2024-08-14" => [ [ "tags" => [ "pencil",  "color" ], ] ],
                        "2024-08-15" => [ [ "tags" => [ "pencil",  "color" ], ] ],
                        "2024-08-16" => [ [ "tags" => [ "pencil",  "color" ], ] ],
                        "2024-08-17" => [ [ "tags" => [ "pencil",  "color" ], ] ],
                        "2024-08-18" => [ [ "tags" => [ "pencil",  "b-n-w" ], "file" => "*-a",  ], [ "tags" => [ "pencil",  "b-n-w" ], "file" => "*-b", ] ],
                        "2024-08-19" => [ [ "tags" => [ "pencil",  "b-n-w" ], "file" => "*-a",  ], [ "tags" => [ "pencil",  "b-n-w" ], "file" => "*-b", ] ],
                        "2024-08-20" => [ [ "tags" => [ "pencil",  "color" ], "file" => "*-a",  ], [ "tags" => [ "pencil",  "b-n-w" ], "file" => "*-b", ] ],
                        "2024-12-10" => [ [ "tags" => [ "alcohol", "color" ], "file" => "*-a",  ], [ "tags" => [ "alcohol", "color" ], "file" => "2024-12-11-b", ] ],
         
                        ] as $id => $pages) {

                ?><button popovertarget="pop-<?= $id ?>"><?php

                    $w = 1 == count($pages) ? 344 : 172;
                    $h = 256;

                    foreach ($pages as $page) {

                        $name = isset($page["file"]) ? str_replace("*", $id, $page["file"]) : $id;
                        $tags = array_merge([ "all" ], $page["tags"]);
            
                        ?><img <?php
                            ?>loading="lazy" <?php
                            ?>width="<?= $w ?>px" height="<?= $h ?>px" style="--width: <?= $w ?>; --height: <?= $h ?>;" <?php if (false) {
                            ?>srcset="media/800/<?= $name ?>.avif 400w, media/1600/<?= $name ?>.avif 800w, media/3200/<?= $name ?>.avif 1600w" <?php }
                            ?>src="media/800/<?= $name ?>.avif" <?php
                            ?>data-tags="<?= implode(" ", $tags) ?>"><?php
                        
                    }

                ?></button><div popover id="pop-<?= $id ?>"><?php

                    $w = 1 == count($pages) ? 344 : 172;
                    $h = 256;

                    foreach ($pages as $page) {

                        $name = isset($page["file"]) ? str_replace("*", $id, $page["file"]) : $id;
                        $tags = array_merge([ "all" ], $page["tags"]);
            
                        ?><img <?php
                            ?>loading="lazy" <?php
                            ?>width="<?= $w ?>px" height="<?= $h ?>px" style="--width: <?= $w ?>; --height: <?= $h ?>;" <?php if (false) {
                            ?>srcset="media/800/<?= $name ?>.avif 400w, media/1600/<?= $name ?>.avif 800w, media/3200/<?= $name ?>.avif 1600w" <?php }
                            ?>src="media/3200/<?= $name ?>.avif" <?php
                            ?>data-tags="<?= implode(" ", $tags) ?>"><?php
                        
                    }

                ?></div>
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

    <script>

        addEventListener("DOMContentLoaded", (event) => {
            <?php foreach (@file("js/app.js") as $line) echo "            $line"; ?>

        });

    </script>

</html>