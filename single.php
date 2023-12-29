<?php

/**
 * The template for displaying all single posts
 *
 * @package redapple
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

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

                            <li class="breadcrumb-item active" aria-current="page"> NEWS/EVENTI</li>
                        </ol>
                    </div>
                </div>
            </div>

        </nav>
    </section>
    <!-- breadcrumb section ends here  -->

    <!-- news banner start from here  -->
    <section class="avanzata-banner-main news-banner-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>NEWS/EVENTI</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- news banner start from here  -->
    <section class="newsdetails-main">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="news-image-box">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/news/news.png" alt="">
                                    </a>
                                </div>


                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="card-body">
                                    <div class="news-short-box">
                                        <h4>
                                            bau 2023
                                        </h4>
                                        <h6>dal 17 al 22 aprile 2023.</h6>
                                        <p>
                                            Per scoprire le nostre novità 2023 l’appuntamento è al BAU 2023al Trade
                                            Fair Center Messe München
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum...
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<?php
get_footer();
