<?php get_header(); ?>

<main>
    <div class="container">
        <h1><?php esc_html_e( 'Cette page est introuvable.', 'textdomain' ); ?></h1>
        <p><?php esc_html_e( 'Rien n\'a été trouvé à cet emplacement. Essayer d\'utiliser l\'un des liens ci-dessous ou effectuer une recherche ?', 'textdomain' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</main>

<?php get_footer(); ?>
