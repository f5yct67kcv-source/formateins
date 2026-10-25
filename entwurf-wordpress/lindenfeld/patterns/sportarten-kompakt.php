<?php
/**
 * Title: Sportarten als Zeile
 * Slug: lindenfeld/sportarten-kompakt
 * Categories: lindenfeld
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"weiss","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-weiss-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:group {"align":"wide","className":"lf-sportzeile","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide lf-sportzeile">
<?php
$sportarten = array(
	array( '05', 'Tennisplätze', 'Halle, plus 4 im Freien', '/sportangebot/#tennis' ),
	array( '02', 'Squash-Courts', 'mit Glasrückwand', '/sportangebot/#squash' ),
	array( '05', 'Badmintonfelder', 'beheizte Halle', '/sportangebot/#badminton' ),
	array( '03', 'Pickleballfelder', 'Paddel zum Mieten', '/sportangebot/#pickleball' ),
	array( '04', 'Fitnesskurse', 'Montag bis Freitag', '/sportangebot/#fitness' ),
);
foreach ( $sportarten as $s ) :
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"lf-zahl","textColor":"platz","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="lf-zahl has-platz-color has-text-color" style="font-size:3rem"><?php echo esc_html( $s[0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600"><a href="<?php echo esc_url( $s[3] ); ?>"><?php echo esc_html( $s[1] ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"klein","textColor":"schiefer"} -->
<p class="has-schiefer-color has-text-color has-klein-font-size"><?php echo esc_html( $s[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
