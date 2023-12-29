<?php

/**
 * template name: PTEK Contatti
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

                            <li class="breadcrumb-item active" aria-current="page"> contatti</li>
                        </ol>
                    </div>
                </div>
            </div>

        </nav>
    </section>
    <!-- breadcrumb section ends here  -->

    <!-- contatti banner start from here  -->
    <section class="contatti-banner-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Contattaci</h2>
                    <p>Scrivici per richiedere informazioni o per fissare un appuntamento</p>
                </div>
            </div>
        </div>
    </section>
    <!-- contatti banner end here  -->

    <!-- cotnatti form start from here  -->
    <section class="contatti-from-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="">
                        <div class="row justify-content-between">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="Nome" class="form-label">Nome e cognome*</label>
                                    <input type="text" class="" id="Nome" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="nazione" class="form-label">nazione*</label>
                                    <input type="text" class="" id="nazione" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="indirizzo" class="form-label">indirizzo*</label>
                                    <input type="text" class="" id="indirizzo" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="azienda" class="form-label">azienda</label>
                                    <input type="text" class="" id="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="cap" class="form-label">cap*</label>
                                    <input type="text" class="" id="cap" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="email" class="form-label">email*</label>
                                    <input type="email" class="" id="email" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="citta" class="form-label">città*</label>
                                    <input type="text" class="" id="citta" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="sonoun" class="form-label">sono un</label>
                                    <input type="text" class="" id="sonoun">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="provincia" class="form-label">provincia*</label>
                                    <input type="text" class="" id="provincia" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="scrivo">Scrivo per:</div>
                                <div class="form-check">
                                    <input class="" type="checkbox" id="nominativi">
                                    <label class="" for="nominativi"> AVERE I NOMINATIVI DEI RIVENDITORI PIÙ VICINI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="" type="checkbox" id="azienda">
                                    <label class="" for="azienda"> FARE VISITA PERSONALE COMMERCIALE DELL'AZIENDA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="" type="checkbox" id="informazioni">
                                    <label class="" for="informazioni"> INFORMAZIONI TECNICHE
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="newsletter-box">
                                    <p>VUOI RIMANERE SEMPRE AGGIORNATO SUI NOSTRI PRODOTTI? <br>
                                        <strong>ISCRIVITI ALLA NEWSLETTR</strong>
                                    </p>
                                    <div class="form-check">
                                        <input class="" type="checkbox" id="desidero">
                                        <label class="" for="desidero"> desidero ricevere la newsletter
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="messaggio" class="form-label">MESSAGGIO</label>
                                    <textarea name="" id="messaggio" cols="" rows=""></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="privecy-box">
                                    <h6>PRIVACY</h6>
                                    <p>Nel rispetto della legge n. 675 del 31/12/96, i dati forniti dall'Utente
                                        verranno raccolti in un archivio conservato in formato elettronico di
                                        proprieta' di Protek srl, per essere usati principalmente ai fini dell'invio
                                        di informazioni via e-mail sulle novita' che riguardano i prodotti Protek e
                                        svolgimento delle operazioni indicate nell'informativa. L'Utente potra' in
                                        qualsiasi momento chiedere la modifica o la cancellazione inviando una
                                        e-mail a: info@protek-controtelai.it</p>
                                    <div class="form-check">
                                        <input class="" type="checkbox" id="accetto">
                                        <label class="" for="accetto"> accetto*
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="contatti-submit">
                                    <button type="submit">invia richiesta</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php //echo do_shortcode('[contact-form-7 id="9ba2d87" title="Contatti"]');?>
                </div>
            </div>
        </div>
    </section>
    <!-- cotnatti form end here  -->

    <!-- contatti address start from here  -->
    <section class="contatti-address-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="titlebox">
                        <h2>Dove siamo</h2>
                    </div>
                    <div class="addressbook">
                        <div class="icon">
                            <i class="fa-thin fa-location-dot"></i>
                        </div>
                        <div class="single-addresslink">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <strong> Protek S.r.l. Unipersonale</strong>
                                        Via G.L. Bernini, 3620865 - <br>
                                        Usmate Velate(MB) - ITALY
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="single-addresslink">
                            <ul>
                                <li> <a href="tel:+3903967579">tel. +39 039 67579</a></li>
                                <li><a href="fax:+390396757990">fax. +39 039 6757990</a></li>
                            </ul>


                        </div>
                        <div class="single-addresslink">
                            <ul>
                                <li>
                                    <a href="mailto:info@protek-controtelai.it">info@protek-controtelai.it</a>
                                </li>
                                <li>
                                    <a href="#">P.IVA 02613350137</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2789.445414927197!2d9.361794418831419!3d45.641876246038706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b05da2ffaa8b%3A0x6a423cdbbca36f38!2sProtek%20srl!5e0!3m2!1sen!2sus!4v1703828251156!5m2!1sen!2sus" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contatti address end here  -->

</main>

<?php
get_footer();
?>