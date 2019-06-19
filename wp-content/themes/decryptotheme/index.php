<?php get_header(); //appel du template header.php  ?>

<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
    <div class="container">
        yo
    </div>
    <div class="container"></div>
    <div class="container d-flex flex-wrap">
        <div class="d-flex type1">
            <p>salut</p>
        </div>
        <div class="d-flex type2">
                <p>hehedsfs</p>
        </div>
        <div class="d-flex type3">
            <p>test</p>
        </div>
    </div>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>