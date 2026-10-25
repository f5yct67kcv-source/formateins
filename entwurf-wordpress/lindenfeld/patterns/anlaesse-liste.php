<?php
/**
 * Title: Anlaesse als Liste
 * Slug: lindenfeld/anlaesse-liste
 * Categories: lindenfeld
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":31,"query":{"perPage":6,"pages":0,"offset":0,"postType":"anlass","order":"asc","orderBy":"date","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"lf-anlass-zeile","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group lf-anlass-zeile">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"anlass_datum_text"}}}},"className":"lf-anlass-datum"} -->
<p class="lf-anlass-datum"></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"anlass_ort"}}}},"className":"lf-anlass-ort"} -->
<p class="lf-anlass-ort"></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Zurzeit sind keine Anlässe ausgeschrieben.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
