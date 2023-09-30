@extends('layouts.site.site')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="tg-homebannervtwo">
				<div id="tg-homeslider" class="tg-homeslider owl-carousel tg-btnround tg-haslayout">
					<div class="item">
						<figure>
							<img src="images/slider/img-10.jpg" alt="image description">
							<figcaption class="tg-slidercontent">
								<div class="tg-slidercontentbox">
									<a class="tg-btn" href="javascript:void(0);">en savoir plus</a>
									<div class="tg-titledescription">
										<h1>Un institut gabonais</h1>
										<div class="tg-description">
											<p>
												L'Institut de Santé et Polytechnique de PROCCL est une 
												Institut universitaire d'enseignement privé, <br> qui participe au PSGE du gouvernement.
											</p>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="item">
						<figure>
							<img src="images/slider/img-04.jpg" alt="image description">
							<figcaption class="tg-slidercontent">
								<div class="tg-slidercontentbox">
									<a class="tg-btn" href="javascript:void(0);">en savoir plus</a>
									<div class="tg-titledescription">
										<h1>Un Institut d'enseignement supérieur</h1>
										<div class="tg-description">
											<p>
												L'ISPP regroupe quatre établissements
												d'enseignement supérieur travaillant pour la mise en valeur <br>
												de la formation de qualité offerte au Gabon. 
											</p>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="item">
						<figure>
							<img src="images/slider/img-06.jpg" alt="image description">
							<figcaption class="tg-slidercontent">
								<div class="tg-slidercontentbox">
									<a class="tg-btn" href="javascript:void(0);">en savoir plus</a>
									<div class="tg-titledescription">
										<h1>Un établissement d'envergure</h1>
										<div class="tg-description">
											<p>
												L'Institut de Santé et Polytechnique de PROCCL 
												a été crée en 2017, dans le but de répondre aux besoins <br>
												de qualité des soins de santé et des techniciens qualifiés
												dans les secteurs socio-économiques clés.
											</p>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--************************************
		Home Slider End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="tg-content" class="tg-content">
						<section class="tg-sectionspace tg-haslayout">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="tg-borderheading">
										<h2>Actualités</h2>
									</div>
									<div class="tg-events">
										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/events/img-11.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">La soutenance des étudiants de l'IMSISS</a></h3>
														</div>
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Mercredi 28 Décembre 2023</span>
																</a>
															</li>
														</ul>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="tg-sectionspace tg-haslayout">

							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
									<div class="tg-shortcode tg-welcomeandgreeting">
										<figure><img src="images/img-03.jpg" alt="image description"></figure>
										<div class="tg-shortcodetextbox">
											<h2>Bienvenue &amp; salutations !</h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate...</p>
											</div>
											<span class="tg-name">Prof. Dieudonné NJAMEN</span>
											<span class="tg-designation">Directeur</span>
											<div class="tg-btnpluslogo">
												<a class="tg-btn" href="message_du_recteur">en savoir plus</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="tg-widget tg-widgetsearchcourse">
										<div class="tg-widgettitle">
											<h3>Rechercher un cours</h3>
										</div>
										<div class="tg-widgetcontent">
											<form class="tg-formtheme tg-formsearchcourse">
												<fieldset>
													<div class="tg-inputwithicon">
														<i class="icon-book"></i>
														<input type="search" name="Keyword" class="form-control" placeholder="mot-clé">
													</div>
													<div class="tg-inputwithicon">
														<i class="icon-layers"></i>
														<span class="tg-select">
															<select>
																<option value="">Programmes</option>
															</select>
														</span>
													</div>
													<div class="tg-inputwithicon">
														<i class="icon-home"></i>
														<span class="tg-select">
															<select>
																<option value="">Ecole</option>
															</select>
														</span>
													</div>
													<button type="submit" class="tg-btn">Rechercher maintenant</button>
													<a href="cours">Voir tous les cours</a>
												</fieldset>
											</form>
										</div>
									</div>
								</div>

							</div>
							
						</section>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<section class="tg-sectionspace tg-haslayout">
						<div class="tg-affiliationscertifications">
							<div class="tg-borderheading">
								<h2>Nos établissements</h2>
							</div>
							<div id="tg-affiliationscertificationsslider" class="tg-affiliationscertificationsslider owl-carousel">
								<div class="item">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/brands/img-01.png" alt="image description">
										</a>
									</figure>
								</div>
								<div class="item">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/brands/img-02.png" alt="image description">
										</a>
									</figure>
								</div>
								<div class="item">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/brands/img-03.png" alt="image description">
										</a>
									</figure>
								</div>
								<div class="item">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/brands/img-04.png" alt="image description">
										</a>
									</figure>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection