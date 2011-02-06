<?php get_header() ?>

	<div id="container">
		<div id="content">

			<div id="post-0" class="post error404 not-found">
				<h2 class="entry-title"><?php _e( 'Oh noes!', 'sandbox' ) ?></h2>
				<div class="entry-content">
					<p><?php _e( 'Das h&auml;tte nicht passieren sollen: Was Du suchst, gibt es hier nicht. Versuche es in der Suchbox noch einmal mit anderen Suchbegriffen oder geh zurück zur Startseite.', 'sandbox' ) ?></p>
				</div>
				<form id="searchform-404" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s-404" name="s" class="text" type="text" value="<?php the_search_query() ?>" size="40" />
						<input class="button" type="submit" value="<?php _e( 'Finden!', 'sandbox' ) ?>" />
					</div>
				</form>
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>