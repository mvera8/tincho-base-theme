<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$criticals = array(
	'navbar',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );

get_header();
get_component(
	'navbar',
	array(
		'brand' => $site_name,
	)
);
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    if ( is_category() ) {
                        single_cat_title();
                    } elseif ( is_tag() ) {
                        single_tag_title();
                    } elseif ( is_author() ) {
                        the_post();
                        echo 'Author Archives: ' . get_the_author();
                        rewind_posts();
                    } elseif ( is_day() ) {
                        echo 'Daily Archives: ' . get_the_date();
                    } elseif ( is_month() ) {
                        echo 'Monthly Archives: ' . get_the_date( _x( 'F Y', 'monthly archives date format', 'your-theme' ) );
                    } elseif ( is_year() ) {
                        echo 'Yearly Archives: ' . get_the_date( _x( 'Y', 'yearly archives date format', 'your-theme' ) );
                    } else {
                        echo 'Archives';
                    }
                    ?>
                </h1>
            </header>

            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_format() );
            endwhile;

            the_posts_pagination();

        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </main>
</div>

<?php
get_footer();