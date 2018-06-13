<?php
/**
 *
 * Archive
 *
 * @package WordPress
 **/

get_header(); ?>

<article>

<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content' );
	the_post_navigation( array(
		'prev_text' => '<span class="size-small">前の記事</span>',
		'next_text' => '<span class="size-small">次の記事</span>',
		'screen_reader_text'  => '前後の記事へのリンク',
	) );
	endwhile;
?>
</article>
<?php
get_footer();
