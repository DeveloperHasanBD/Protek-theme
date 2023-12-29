<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package redapple
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<header>
		<div class="main-header bg-white" id="main-header">
			<div class="container">
				<div class="header-flex">
					<div class="logo-box">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-dark.png" class="show-scrool">
						</a>
					</div>
					<div class="main-header-items">
						<ul class="parent-ul">
							<li class="megamenu-parent">
								<a href="javascript:void(0);" class="show-megamenu">prodotti</a>
								<div class="megamenu-main">
									<div class="container">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
												<div class="megamenu-links-wrapper">
													<h4>controtelai </h4>
													<ul>
														<li class="megamenu-parent-li">
															<a href="#">
																<span>classic collection</span> - Controtelai per
																stipiti e coprifili
																<span class="arrow-icon">
																	<img src="<?php echo get_template_directory_uri();?>/assets/images/icon/arrow-right.png" alt="">
																</span>
															</a>
															<div class="mega-submenu-parent">
																<ul class="mega-submenu">
																	<li>
																		<a href="#">
																			<span>solo</span> - Per una porta scorrevole
																			a scomparsa
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span> duo</span> - Per due porte scorrevoli
																			a scomparsa
																		</a>
																	</li>
																	<li>
																		<a href="#" class="active">
																			<span> MAXXI</span> - Per due porte
																			scorrevoli a scomparsa
																			parallele
																		</a>
																		<div class="mega-submenu-imagebox">
																			<img src="<?php echo get_template_directory_uri();?>/assets/images/avanzata/megasubmenu-image.png" alt="">
																		</div>
																	</li>
																	<li>
																		<a href="#">
																			<span> bilaterale</span> - Per due porte
																			scorrevoli a
																			scomparsa contrapposte
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>compact</span> - Per due porte
																			scorrevoli
																			incernierate
																			ed impacchettate
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span> half compact</span> - Per due porte
																			scorrevoli
																			incernierate dall’ingombro dimezzato
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="#">
																<span>linear collection</span> - Controtelai senza
																stipiti e
																coprifili e porte filo muro
															</a>
														</li>
														<li>
															<a href="#">
																<span> MAGIC BOX COLLECTION</span> - Controtelai
																predisposti per
																utenze e/o idriche
															</a>


														</li>
														<li>
															<a href="#">
																<span> skudo collection</span> - Controtelai in kit
															</a>
														</li>
														<li>
															<a href="#">
																<span> wallout</span> - Kit scorrevoli esterno muro
															</a>
														</li>
														<li>
															<a href="#">
																<span> outdoor collection</span> - Controtelai per
																esterno
															</a>
														</li>
													</ul>
												</div>
												<div class="megamenu-links-wrapper">
													<h4>maniglie e serrature </h4>
													<ul>
														<li>
															<a href="#" class="">
																Maniglie per scorrevole
															</a>
														</li>
														<li>
															<a href="#">
																Serrature per scorrevole
															</a>
														</li>
														<li>
															<a href="#">
																Maniglie per battente
															</a>
														</li>

													</ul>
												</div>
												<div class="megamenu-links-wrapper">
													<h4>accessori </h4>
													<ul>
														<li>
															<a href="#" class="">
																Per scorrevole Classic
															</a>
														</li>
														<li>
															<a href="#">
																Per scorrevole linear
															</a>
														</li>
														<li>
															<a href="#">
																Per battente
															</a>
														</li>

													</ul>
												</div>

											</div>
										</div>
									</div>
									<div class="megamenu-close-btn ">
										<button class="megamenu-close">
											<i class="fa-light fa-xmark"></i>
										</button>

									</div>
								</div>

							</li>
							<li class="megamenu-parent">
								<a href="javascript:void(0);" class="show-megamenu">chi siamo</a>
								<div class="megamenu-main">
									this is for chisiamo
								</div>
							</li>
							<li>
								<a href="#">SOSTENIBILITà</a>
							</li>
							<li>
								<a href="#">news/eventi</a>
							</li>
							<li>
								<a href="#">CONTATTI</a>

							</li>
							<li>
								<a href="#">PROTEK+DESIGN</a>

							</li>
							<li>
								<a href="#">Area Download</a>

							</li>
							<li>
								<a href="#">Ricerca avanzata </a>

							</li>
							<li>
								<a href="#"><i class="fa-regular fa-magnifying-glass"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa-light fa-circle-user"></i></a>
							</li>

							<li>
								<a href="#">ITA</a>
								<ul class="sub-menu d-none">
									<li>
										<a href="#">ENG</a>
									</li>

								</ul>
							</li>
						</ul>
					</div>
					<div class="bars sidebar-toggler-btn">
						<i id="openButton" class="fa-solid fa-bars"></i>
					</div>
				</div>
			</div>


		</div>
	</header>
	<!-- sidebar section start from here  -->

	<div class="sidebar-area sidebar-hide" id="targetElement">
		<div class="logo">
			<a href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-dark.png" alt="">
			</a>
		</div>
		<button id="closeButton" class="text-white">
			<i class="fa-solid fa-xmark"></i>
		</button>
		<div class="mobile-menu-items">
			<ul>
				<li>
					<a href="#">prodotti</a>

				</li>
				<li>
					<a href="#">chi siamo</a>

				</li>
				<li>
					<a href="#">SOSTENIBILITà</a>
				</li>
				<li>
					<a href="#">news/eventi</a>
				</li>
				<li>
					<a href="#">CONTATTI</a>

				</li>
				<li>
					<a href="#">PROTEK+DESIGN</a>

				</li>
				<li>
					<a href="#">Area Download</a>

				</li>
				<li>
					<a href="#">Ricerca avanzata </a>

				</li>
				<li>
					<a href="#"><i class="fa-regular fa-magnifying-glass"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa-light fa-circle-user"></i></a>
				</li>

				<li>
					<a href="#">ITA</a>
					<ul class="sub-menu">
						<li>
							<a href="#">ENG</a>
						</li>

					</ul>
				</li>
			</ul>
		</div>
	</div>