<?php 
    get_header(); 
    $slug = 'pagina-inicial';
    $id = get_page_id_by_slug($slug);

    include 'partials/main-banner.php';
    include 'sections/home/about.php';
    include 'partials/heading-titles.php';
    include 'sections/home/depositions-customers.php';
    include 'sections/home/online-service.php';
    include 'sections/contact/info.php';
    get_footer();