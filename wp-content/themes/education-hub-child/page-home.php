<?php
/**
 * The template for home page.
 *
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Education_Hub
 */

get_header(); the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="vietbox_new">
                        <?php the_content(); ?>
                    </div>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php edit_post_link( esc_html__( 'Edit', 'education-hub' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	/**
	 * Hook - education_hub_action_sidebar.
	 *
	 * @hooked: education_hub_add_sidebar - 10
	 */
	do_action( 'education_hub_action_sidebar' );
?>

<style>
    .block_btn_slider:before {
        content: "<?php the_field('phone', 'option') ?>"
    }
</style>

<?php get_footer(); ?>