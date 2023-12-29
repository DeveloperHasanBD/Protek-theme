<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package redapple
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 custom-col">
    <div class="card">
        <div class="row g-0">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="news-image-box">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news.png" alt="">
                    </a>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card-body">
                    <div class="news-short-box">
                        <h4>
                            <a href="<?php the_permalink(); ?>">bau 2023</a>
                        </h4>
                        <h6>dal 17 al 22 aprile 2023.</h6>
                        <p>
                            Per scoprire le nostre novità 2023 l’appuntamento è al BAU 2023al Trade
                            Fair Center Messe München...
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>