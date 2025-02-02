<?php
get_header();
$slug = 'pagina-inicial';
$id = get_page_id_by_slug($slug);

include 'partials/main-banner.php';
include 'sections/home/about.php';
echo '<div class="container">';
include 'partials/heading-titles.php';
echo '</div>';
include 'sections/home/depositions-customers.php';
include 'sections/home/online-service.php';

$slug = 'contato';
$id = get_page_id_by_slug($slug);

?>
<div class="home-contact">
    <div class="container">
        <section class="heading-titles">
            <article>
                <div class="heading-titles--container">
                    <div class="heading-titles--container--content">
                        <?php echo get_field('heading-title', $id); ?>
                    </div>
                </div>
            </article>
        </section>
    </div>

<?php
include 'sections/contact/info.php';
get_footer();
echo '</div>';