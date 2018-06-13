<?php
/**
 *
 * Index
 *
 * @package WordPress
 **/

?>

<?php get_header(); ?>
<?php /** Defautl post */ ?>
<div class="post-wrapper">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
endwhile;
endif;
?>
</div>
<?php /** Custom post */ ?>
<article>
<?php
$args      = array(
	'post_type'      => 'news',
	'posts_per_page' => 2,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_post() ) :
		$the_query->the_post();
?>
<ul>
	<li><?php echo get_the_date(); ?></li>
	<li><?php the_category(); ?></li>
	<li><?php the_tags(); ?></li>
	<li><?php the_post_thumbnail(); ?></li>
	<li><?php the_content( '読む' ); ?></li>
</ul>
</article>
<?php
endwhile;
endif;
?>
<?php
get_footer();
