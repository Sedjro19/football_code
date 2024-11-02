
@extends('layouts.master')

@section('title', 'Accueil')

@section('content')

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="h5-large">Prêt à inscrire votre enfant ?</h5>
                    <p class="text-light">Vous envisagez de donner un nouvel élan à l'apprentissage de votre enfant ? Nous sommes ravis de vous accueillir ! Téléchargez dès maintenant notre formulaire d’inscription, remplissez-le, et offrez à votre enfant une expérience enrichissante.</p>
                    <a class="btn-solid-lg" href="#introduction">Passer le teste</a>
                    <a class="btn-solid-lg" href="#introduction">Téléchargez maintenant</a>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->

</header> <!-- end of header -->
<!-- end of header -->


    <!-- Introduction -->
    <div id="introduction" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2">Services Complets pour la Formation au Football</h2>
                    <p class="p-heading">Nous offrons des programmes de formation adaptés aux jeunes talents du football. Rejoignez-nous pour développer vos compétences sur le terrain et atteindre vos objectifs.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-futbol"></span> <!-- Icône football -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Entraînement Technique</h4>
                            <div class="card-text">Améliorez vos compétences techniques avec nos entraîneurs spécialisés, à travers des exercices ciblés et des sessions sur le terrain.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-video"></span> <!-- Icône vidéo -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Matchs d'Exhibition</h4>
                            <div class="card-text">Participez à des matchs d'exhibition pour mettre en pratique vos compétences et vous mesurer à d'autres équipes.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-dumbbell"></span> <!-- Icône entraînement physique -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Formation Physique</h4>
                            <div class="card-text">Améliorez votre condition physique grâce à des séances d'entraînement personnalisées adaptées à votre âge et niveau.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->


    <!-- Services 2 -->
    <div class="p-3 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-1">
                    <div class="text-container p-3">
                        <h4 class="border-bottom">Des entraineurs qualifiés</h4>
                        <p>Grâce à un programme intensif d’entraînements dirigés par les coachs hautement qualifiés de l’Académie, les joueurs vont côtoyer le football de haut niveau, avec l’objectif d’approcher leur rêve : faire des essais dans les clubs pros et entrer dans le monde professionnel. Parallèlement, chaque joueur est licencié dans l’un de nos clubs partenaires, à l’AS Cannes par exemple, club qui a formé Zinedine Zidane . Les premières semaines à l’Académie servent à évaluer le potentiel du joueur et faire des essais dans différents clubs de la région. Puis chacun reçoit une licence FFF et dispute les matchs du championnat de France</p>
                        <a class="read-more no-line green d-block text-center" href="{{ route('inscription') }}">Inscrivez-vous <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img class="img-fluid rounded p-3" src="images/matchs-amicaux-2.jpg" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of services 2 -->


    <!-- Services 2 -->
    <div class="my-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img class="img-fluid rounded p-3" src="images/matchs-amicaux-2.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-md-6 -2 p-2">
                    <div class="text-container p-3">
                        <h4 class="border-bottom">ACADÉMIE DE FOOTBALL EN FRANCE</h4>
                        <p>Vous rêvez de vivre votre passion du football dans un cadre spécialisé et motivant qui va vous permettre d’atteindre votre plus haut potentiel ? Vous souhaitez approcher la pratique du football professionnel sans pour autant négliger les études ?</p>
                        <p>A seulement 2 pas de Nice, Monaco, Marseille, nous ouvrons les portes de la réussite grâce à un projet académique personnalisé et à notre approche unique d’amélioration des performances au contact des meilleurs.</p>
                        <a class="read-more no-line green d-block text-center" href="{{ route('inscription') }}">Inscrivez-vous <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- end of services 2 -->

    <!-- Condition d'inscrition-->
    <div class="container my-5">
        <h2 class="text-center mb-4">Conditions d'Inscription</h2>
        <p class="lead text-center mb-4">Veuillez lire attentivement les conditions ci-dessous avant de vous inscrire.</p>

        <ul class="list-group mb-4">
          <li class="list-group-item">
            <strong>Âge requis :</strong> Être âgé de 07 ans ou plus. Les mineurs doivent fournir une autorisation écrite de leurs parents ou tuteurs.
          </li>
          <li class="list-group-item">
            <strong>Formulaire d'inscription :</strong> Remplir le formulaire d'inscription en ligne avec des informations précises et à jour. Toute inexactitude peut entraîner un refus d'inscription.
          </li>
          <li class="list-group-item">
            <strong>Documents nécessaires :</strong> Fournir un certificat de naissance valide et une pièce d'identité (carte d'identité ou passeport).
          </li>
          <li class="list-group-item">
            <strong>Dossier médical :</strong> Soumettre un dossier médical à jour, incluant des informations sur les vaccinations et une attestation de santé.
          </li>
          <li class="list-group-item">
            <strong>Séance d'évaluation :</strong> Participer à une séance d'évaluation préalable pour déterminer le niveau de compétence et les besoins individuels.
          </li>
          <li class="list-group-item">
            <strong>Engagement :</strong> S'engager à respecter les règlements et le code de conduite de notre institution tout au long de l'année.
          </li>
          <li class="list-group-item">
            <strong>Frais d'inscription :</strong> Payer les frais d'inscription dans les délais impartis. Les détails concernant les modalités de paiement seront fournis lors de l'inscription.
          </li>
          <li class="list-group-item">
            <strong>Assurance :</strong> Souscrire à une assurance responsabilité civile pour couvrir les éventuels accidents ou blessures survenant pendant les activités.
          </li>
          <li class="list-group-item">
            <strong>Confidentialité :</strong> Accepter que les informations fournies soient utilisées uniquement à des fins administratives et ne soient pas partagées avec des tiers sans consentement.
          </li>
        </ul>

        <p class="text-muted text-center">Pour toute question, veuillez contacter notre service d'assistance au <strong>contact@exemple.com</strong>.</p>
    </div>

    <!-- INcitation--->
    <div class="container-fluid p-5 text-center my-5 bg-gray">
        <h2 class="mb-4">Prêt à faire le premier pas ?</h2>
        <p class="lead mb-4">Rejoignez-nous et découvrez comment nous pouvons vous aider à atteindre vos objectifs.</p>

        <div>
          <a href="{{ route('inscription') }}" class="read-more no-line green btn text-center text-decoration-none">Inscrivez-vous</a>
          <a href="contact.html" class="read-more no-line green text-center text-decoration-none">Contactez-Nous</a>
        </div>
    </div>


    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="images/testimonial-1.jpg" alt="alternative">
                                    <p class="testimonial-text">“En tant que parent, je suis très impressionné par la qualité des installations de ce centre de formation au football. Les terrains sont bien entretenus et offrent un espace parfait pour pratiquer divers aspects du jeu. Mon fils a également bénéficié d'un programme de préparation physique qui lui a permis de renforcer son endurance et sa force, ce qui est essentiel pour le football.”</p>
                                    <div class="testimonial-author">Marlene Visconte</div>
                                    <div class="testimonial-position">General Manager - Scouter</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="images/testimonial-2.jpg" alt="alternative">
                                    <p class="testimonial-text">“Un programme complet et motivant !
                                        Le centre de formation au football propose un programme de formation qui couvre tous les aspects du jeu, de la technique à la tactique. Ma fille a rejoint le programme l'été dernier, et elle a fait des progrès significatifs en peu de temps. Les entraîneurs sont extrêmement compétents et savent comment adapter les séances d'entraînement aux besoins spécifiques de chaque joueuse.”</p>
                                    <div class="testimonial-author">John Spiker</div>
                                    <div class="testimonial-position">Team Leader - Vanquish</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="images/testimonial-3.jpg" alt="alternative">
                                    <p class="testimonial-text">“Après avoir inscrit mon fils dans ce centre de formation, j'ai été ravi de voir les résultats. En quelques mois seulement, il a non seulement amélioré sa technique de jeu, mais il a aussi pris confiance en lui. Les entraîneurs sont dévoués et investis dans le développement de chaque joueur. Les séances d'entraînement sont variées et dynamiques, ce qui maintient l'intérêt des jeunes. De plus, le centre organise régulièrement des tournois qui permettent aux enfants de se mesurer à d'autres équipes, ce qui est très motivant pour eux.”</p>
                                    <div class="testimonial-author">Stella Virtuoso</div>
                                    <div class="testimonial-position">Design Chief - Bikegirl</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class=" sm-12 col-lg-12">

                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Afrique</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Europe</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Asie</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->

    <!-- FAQ Section -->
    <div id="faq" class="container my-5">
        <h2 class="h2 text-center">Questions Fréquemment Posées</h2><br>
        <div class="accordion" id="faqAccordion">
            <!-- Question 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus-circle"></i> Question 1: Quelles sont les conditions d'admission ?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Les conditions d'admission incluent avoir entre 5 et 28 ans et posséder une pièce d'identité valide.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-plus-circle"></i> Question 2: Quels sont les frais d'inscription ?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Les frais d'inscription s'élèvent à 120 € (78.000 F CFA) pour les recrutements promotionnels.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-plus-circle"></i> Question 3: Quelle est la durée de la formation ?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        La durée de la formation dépend du programme choisi, mais elle est généralement de plusieurs mois.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fas fa-plus-circle"></i> Question 4: Comment s'inscrire ?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                    <div class="card-body">
                        Pour s'inscrire, veuillez remplir le formulaire d'inscription et le soumettre dans les délais impartis.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fas fa-plus-circle"></i> Question 5: Y a-t-il des activités en dehors de la formation ?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                    <div class="card-body">
                        Oui, nous organisons régulièrement des événements sportifs, des tournois et des activités de team building.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <i class="fas fa-plus-circle"></i> Question 6: Quels sont les équipements nécessaires ?
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                    <div class="card-body">
                        Les participants doivent avoir des chaussures de sport adaptées, un maillot, un short et une bouteille d'eau.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end of FAQ Section -->

    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contact-Nous</h2>
                    <p class="p-heading">Of will at sell well at as. Too want but tall nay like old removing yourself today</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;22 Innovative, San Francisco, CA 94043, US</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@site.com">contact@site.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <!-- Contact Form -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control-input" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Envoyer le Message</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

@endsection
