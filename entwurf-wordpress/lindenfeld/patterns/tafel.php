<?php
/**
 * Title: Hero mit Anzeigetafel
 * Slug: lindenfeld/tafel
 * Categories: lindenfeld
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
<!-- wp:paragraph {"className":"lf-ueberzeile"} -->
<p class="lf-ueberzeile">Tennis · Squash · Badminton · Pickleball</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0.5rem"}}}} -->
<h1 class="wp-block-heading" style="margin-top:0.5rem">Heute offen.<br>Wie jeden Tag.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"gross","style":{"spacing":{"margin":{"top":"1.25rem"}}}} -->
<p class="has-gross-font-size" style="margin-top:1.25rem">Fünf Tennisplätze in der Halle, zwei Squash-Courts, fünf Badmintonfelder und Pickleball. Rund um die Uhr, der Zugangscode kommt mit der Buchung.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://apps.gotcourts.com/de/">Platz buchen</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/preise/">Preise Winter 2026/27</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
<!-- wp:group {"className":"lf-tafel","backgroundColor":"anthrazit","textColor":"kreide","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"},"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group lf-tafel has-kreide-color has-anthrazit-background-color has-text-color has-background" style="padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"lf-tafel-titel"} -->
<p class="lf-tafel-titel">Heute</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"lf-tafel-zeile"} -->
<p class="lf-tafel-zeile"><strong>Hallen</strong><span>offen, mit Code</span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"lf-tafel-zeile"} -->
<p class="lf-tafel-zeile"><strong>Rezeption</strong><span>8 bis 20 Uhr</span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"lf-tafel-zeile"} -->
<p class="lf-tafel-zeile"><strong>Restaurant</strong><span>11 bis 22 Uhr</span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"lf-tafel-zeile"} -->
<p class="lf-tafel-zeile"><strong>Badminton</strong><span>bis 16 Uhr Turnier</span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"lf-tafel-titel"} -->
<p class="lf-tafel-titel">Nächste Anlässe</p>
<!-- /wp:paragraph -->
<!-- wp:query {"queryId":41,"query":{"perPage":3,"pages":0,"offset":0,"postType":"anlass","order":"asc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"anlass_datum_text"}}}},"className":"lf-anlass-datum"} -->
<p class="lf-anlass-datum"></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Zurzeit nichts ausgeschrieben.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"klein","style":{"color":{"text":"#b9b6ab"}}} -->
<p class="has-text-color has-klein-font-size" style="color:#b9b6ab"><a href="/anlaesse/">Alle Anlässe</a> · <a href="/aktuell/">Alle Mitteilungen</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
