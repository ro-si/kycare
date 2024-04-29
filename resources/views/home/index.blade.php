@extends('frontend.theme')

@section('body')

@include('home.slider')

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>KYcare<span> au service de votre santé</span></h3>
						<p class="mb-0"> la prise de rendez-vous médicaux en ligne contribue à moderniser et à améliorer l'accès aux soins de santé tout en optimisant les processus pour les prestataires</p>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html"><img loading="lazy" src="images/resource/1.png" alt="features image"></a>
									</figure>
								</div>
								<h3 class="mb-2">Accessibilité accrue</h3>
								<p> En permettant aux patients de prendre rendez-vous à tout moment, de n'importe où, la prise de rendez-vous en ligne élimine
                                     les contraintes géographiques et temporelles. Cela améliore l'accessibilité aux soins de santé, 
                                    notamment pour ceux qui ont des horaires chargés, des difficultés de mobilité ou vivent dans des régions éloignées.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="images/resource/2.png" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Optimisation du temps</h3>
								<p>Pour les praticiens, les systèmes de prise de rendez-vous en ligne permettent une gestion plus efficace du temps en automatisant
                                     les tâches administratives. Cela libère du temps pour se concentrer sur les soins aux patients et réduit
                                      les délais d'attente pour obtenir un rendez-vous.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="images/resource/3.png" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Réduction des rendez-vous manqués</h3>
								<p>Les rappels automatiques envoyés aux patients par les systèmes de prise de 
                                    rendez-vous en ligne contribuent à réduire les rendez-vous manqués. 
                                    Cela maximise le temps de consultation et optimise les revenus des pratiques médicales.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="images/resource/4.png" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Amélioration de l'expérience patient</h3>
								<p> La commodité et la flexibilité offertes par la prise de rendez-vous médicaux en ligne améliorent l'expérience globale des patients.
                                     Ils se sentent mieux pris en charge et ont plus de contrôle sur leur propre planification médicale.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Nav tabs -->
          <div class="tabs mb-5">
            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dormitory-tab" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory" aria-selected="true">Paiement</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="orthopedic-tab" data-toggle="tab" href="#orthopedic" role="tab" aria-controls="orthopedic" aria-selected="false">orthopedic</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="sonogram-tab" data-toggle="tab" href="#sonogram" role="tab" aria-controls="sonogram" aria-selected="false">sonogram</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="x-ray-tab" data-toggle="tab" href="#x-ray" role="tab" aria-controls="x-ray" aria-selected="false">x-ray</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="diagnostic-tab" data-toggle="tab" href="#diagnostic" role="tab" aria-controls="diagnostic" aria-selected="false">diagnostic</a>
              </li>
            </ul>
          </div>
          <!--Start single tab content-->
          <div class="tab-content" id="aboutTab">
            <div class="service-box tab-pane fade show active" id="dormitory">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-sept.png" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Paiement intégrés</h3>
                    </div>
                    <div class="text">
                      <p>Les patients pourraient non seulement prendre rendez-vous en ligne, 
                        mais aussi payer pour leur consultation ou d'autres services médicaux directement via la plateforme.
                        </p>
                      <p> Cela simplifierait le processus pour les patients, 
                        éliminant le besoin de payer en personne à la clinique ou par téléphone..</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Mobile money
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Paiement carte
                        </li>
                      <li><i class="far fa-dot-circle"></i>
                      Wave</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Explorez</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="orthopedic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-two.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>orthopedic</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="sonogram">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-three.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>sonogram</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="x-ray">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-four.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>x-ray</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="diagnostic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-five.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>diagnostic</h3>
                 </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>   
<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Services 
        <span>fournis</span>
      </h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
        fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/0.png" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span></span>
                <a href="service.html">
                  <h6>Plus de 200 médecin utilse 
medekin pour leur travail
</h6>
                </a>
                <p>Offrez à vos patients la possibilité
 de prendre rendez-vous
 en ligne 24h/24 et 7j/7</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/2.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span></span>
                <a href="service.html">
                  <h6>85 Etablissements nous 
font confiance</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span></span>
                <a href="service.html">
                  <h6>
Nous accueillons d’autres structure</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/1.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span></span>
                <a href="service.html">
                  <h6>Qualification avancée de patientèle</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
         
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Service Section-->

<!--team section-->

<!--End team section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/0.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>
            <span>Notre objectif est de vous accompagner pour mieux vous guérir,dans des        
                      conditions optimales de confort et de bien-être !</span>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      
    </div>
  </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="accordion-section">
  <div class="section-title">
    <h3>FAQ</h3>
  </div>
  <div class="accordion-holder">
    <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h4 class="card-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why Should I choose Medical Health
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              What are the Centre’s visiting hours?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              How many visitors are allowed?
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title">
    <h3>Request
      <span>Appointment</span>
    </h3>
  </div>
  <form name="contact_form" class="default-form contact-form" action="!#" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Name" placeholder="Name" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="Email" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Departments</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Doctor</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn-style-one">submit now</button>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>                    
  </div>
</section>


<!-- End Contact Section -->



@endsection