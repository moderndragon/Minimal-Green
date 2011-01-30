<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<h2 class="page-title"><a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php printf( __( 'Return to %s', 'sandbox' ), wp_specialchars( get_the_title($post->post_parent), 1 ) ) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></h2>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h3 class="entry-title"><?php the_title() ?></h3>
				<div class="entry-content">
					<div class="entry-attachment"><a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a></div>
					<div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
<?php the_content() ?>

				</div>
				<div class="entry-meta">
					<?php printf( __( 'Geschrieben von %1$s am <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>. Setze ein Lesezeichen auf den <a href="%6$s" title="Permalink to %7$s" rel="bookmark">Permalink</a>. Verfolge alle Kommentare hier mit dem <a href="%8$s" title="Comments RSS to %7$s" rel="alternate" type="application/rss+xml">RSS-Feed zu diesem Beitrag</a>.', 'sandbox' ),
						'<span class="author vcard"><a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'Ale Beitr&auml;ge von %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a></span>',
						get_the_time('d m Y'),
						get_the_time('H:i:sO'),
						the_date( '', '', '', false ),
						get_the_time(),
						get_permalink(),
						the_title_attribute('echo=0'),
						comments_rss() ) ?>

<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					<?php printf( __( '<a class="comment-link" href="#respond" title="Hinterlasse einen Kommentar">Hinterlasse einen Kommentar</a> oder einen Trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox' ), get_trackback_url() ) ?>
<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
					<?php printf( __( 'Die Kommentare sind geschlossen, aber Du kannst einen Trackback hinterlassen: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox' ), get_trackback_url() ) ?>
<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
					<?php _e( 'Trackbacks sind geschlossen, aber Du kannst <a class="comment-link" href="#respond" title="Hinterlasse einen Kommentar">einen Kommentar hinterlassen</a>.', 'sandbox' ) ?>
<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					<?php _e( 'Sowohl Kommentare als auch Trackbacks sind zur Zeit geschlossen.', 'sandbox' ) ?>
<?php endif; ?>
<?php edit_post_link( __( 'Bearbeiten', 'sandbox' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>

				</div>
			</div><!-- .post -->

<?php comments_template() ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>