<section id="begging" class="full-width">
<div id="begging-inner">
<div id="begging-top">
<div id="begging-gloss"></div>
<?php

$tagline = '><span class="instead">Instead of an ad, here&rsquo;s&hellip;</span><span class="heres">';
$path = '<img width="352" height="198" src="' . get_template_directory_uri() . '/img/begging/';
$beggingBoxes = array(
    $path . 'link.png" alt="Fan art of Shirtless Link from Zelda: Breath of the Wild"' . $tagline . 'a nice pic of<br>The Hero of Fooooine</span><div class="image-credit">Image credit: <a href="https://pervywithasideofcake.tumblr.com/post/158338272090/in-case-youre-curious-where-ive" target="_blank" rel="external" class="hover-out">pervywithasideofcake</a> on Tumblr</div>',

    $path . 'evans.webp" alt="An animated GIF of Hollywood’s Chris Evans raising his eyebrow seductively"' . $tagline . 'Chris Evans&rsquo;s alluring eyebrow</span>',

    $path . 'noire.webp" alt="Cole Phelps, the main character of LA Noire, trips part-way up some steps and impassively rolls back down them"' . $tagline . 'that one really funny GIF from <b>LA&nbsp;Noire</b></span>',

    $path . 'edgeworth.png" alt="Ace Attorney Miles Edgeworth posing dramatically whilst licking his fingertips"' . $tagline . 'a silly Edgeworth pic we found on Tumblr</span><div class="image-credit">Image credit: <a href="https://www.tumblr.com/hazakurain/53687802863/i-found-some-high-quality-official-art" target="_blank" rel="external" class="hover-out">hazakurain</a> on Tumblr</div>',

    $path . 'snackoo.png" alt="Detective Ema Skye impassively flicking a Snackoo snack at Ace Attorney Apollo Justice"' . $tagline . 'Apollo Justice getting Snackoo&rsquo;d</span><div class="image-credit">Image credit: <a href="https://www.deviantart.com/personasama/art/Snackoo-d-109877968" target="_blank" rel="external" class="hover-out">PersonaSama</a> on DeviantArt</div>',

    $path . 'kim.webp" alt="An animated GIF of Kim Kitsuragi from Disco Elysium raving"' . $tagline . 'Lieutenant Kim Kitsuragi getting his groove on',

    $path . 'pikachu.webp" alt="An animated GIF of Detective Pikachu dancing in front of a 90s-style backdrop"' . $tagline . 'Detective Pikachu throwing shapes',
);

echo $beggingBoxes[array_rand($beggingBoxes)];

?>
</div>
<div id="begging-message">
We&rsquo;re<span class="terrible-thing-free">ad-free,</span><span class="even-worse-thing-free">tracker-free,</span><span class="lazy-thing-free">AI-free,&nbsp;and</span><span class="good-thing">100% independent.</span>
</div>
<div id="begging-button">
<a href="https://ko-fi.com/criticalchicken" target="_blank" rel="external me">Please support us on Ko-fi.</a>
</div>
</div>
</div>
