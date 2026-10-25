<?php
/**
 * Title: Aktuell, die letzten drei Mitteilungen
 * Slug: lindenfeld/aktuell
 * Categories: lindenfeld
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"0.25rem"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"lf-ueberzeile"} -->
<p class="lf-ueberzeile">Aktuell</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Neues aus dem Center</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600"><a href="/aktuell/">Alle Mitteilungen →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","className":"lf-aktuell","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-query alignwide lf-aktuell" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"lf-karte","backgroundColor":"weiss","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group lf-karte has-weiss-background-color has-background" style="min-height:100%;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:post-date /-->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-excerpt {"moreText":"Weiterlesen","excerptLength":24} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Zurzeit gibt es keine Mitteilungen.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
