<?php

/**
 * Template name:  PTEK Ricerca avanzata
 */
get_header();
?>
<main>
    <!-- breadcrumb section start from here  -->
    <section class="breadcrumb-main">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">PROTEK HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> ricerca avanzata</li>
                        </ol>
                    </div>
                </div>
            </div>

        </nav>
    </section>
    <!-- breadcrumb section ends here  -->
    <!-- avanzata banner start from here  -->
    <section class="avanzata-banner-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Ricerca avanzata</h2>
                    <p>cerca il prodotto che meglio soddisfa le tue esigenze </p>
                </div>
            </div>
        </div>
    </section>
    <!-- avanzata banner start from here  -->
    <section class="avanzata-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                    <?php include_once("page-templates/avanzata/left-side.php"); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10 ">
                    <?php include_once("page-templates/avanzata/product-list.php"); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
