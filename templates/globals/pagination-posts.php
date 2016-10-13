<?php
/**
 * Pagination - Posts
 *
 * @author 		WooThemes
 * @package 	Sensei/Templates
 * @version     1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

?>
<nav id="post-entries" class="post-entries fix">
	<?php if (get_previous_post()) { ?>
	    <div class="nav-prev fl"><?php previous_post_link( '%link', '<span class="meta-nav"></span> %title' ); ?></div>
	<?php } ?>
	<?php if (get_next_post()) { ?>
	    <div class="nav-next fr"><?php next_post_link( '%link', '%title <span class="meta-nav"></span>' ); ?></div>
    <?php } ?>
</nav><!-- #post-entries -->
