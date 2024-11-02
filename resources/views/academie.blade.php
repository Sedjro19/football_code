@extends('layouts.master')

@section('title', 'Academie')

@section('content')

  <!-- Header -->
  <header id="header" class="header">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/coach1.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/coach3.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/equipe1.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/equipe2.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

</header> <!-- end of header -->
<!-- end of header -->

    <!-- Services 2 -->
    <div class="p-3 d-flex flex-column"style="min-height: 100vh; height: auto;">
        <div class="container mt-auto mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <div id="carousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/logement1.jpg" class="d-block w-100" alt="image">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/logement3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/logement2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 -2 p-2">
                    <div class="text-container p-3">
                        <h4 class="border-bottom">Hébergement de Qualité au CREPS</h4>
                        <p class="fs-5">Les joueurs sont logés au Centre de Formation et de Performance (CREPS), situé à
                            proximité du port et à seulement 5 minutes à pied du centre-ville. Ce cadre idéal offre non
                            seulement un accès facile aux commodités urbaines, mais aussi un environnement propice à la
                            concentration et à l'entraînement. Les installations comprennent des chambres confortables
                            équipées de tout le nécessaire pour un séjour agréable, favorisant ainsi un équilibre entre le
                            repos et l'effort.</p>
                        <a class="read-more no-line green d-block text-center" href="{{ route('inscription') }}">Inscrivez-vous <span
                                class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div>
            </div>
        </div>
    </div>
    <!-- end of services 2 -->


    <!-- Services 2 -->
    <div class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 -2 p-2">
                    <div class="text-container p-3">
                        <h4 class="border-bottom">Repas Nutriments Équilibrés</h4>
                        <p>La nutrition joue un rôle crucial dans la performance sportive, et c'est pourquoi le centre
                            propose des repas équilibrés, préparés par des nutritionnistes spécialisés. Chaque repas est
                            soigneusement élaboré pour répondre aux besoins énergétiques des jeunes athlètes. Les joueurs
                            bénéficient d'une alimentation variée, comprenant des protéines maigres, des glucides complexes,
                            des fruits et légumes frais, afin d'optimiser leur récupération et de soutenir leur croissance.
                            Des options spécifiques peuvent être adaptées aux besoins alimentaires particuliers de chacun,
                            garantissant ainsi que tous les joueurs aient accès à une nutrition adéquate.</p>
                        <a class="read-more no-line green d-block text-center" href="{{ route('inscription') }}">Inscrivez-vous <span
                                class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <div id="carousel-2" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouse-2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of services 2 -->
    <!-- Services 2 -->
    <div class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 -2 p-2">
                    <div class="text-container p-3">
                        <h5 class="border-bottom">Installations d'Entraînement de Premier Ordre</h5>
                        <p>Le CREPS dispose d'un terrain d’entraînement sur place, conçu pour répondre aux exigences du
                            football moderne. Les joueurs peuvent s’entraîner sur un gazon de qualité, permettant une
                            pratique optimale des techniques et des stratégies de jeu. En outre, le centre est équipé d'une
                            salle de sport et de gym très performante, offrant des machines modernes et des équipements
                            variés pour le renforcement musculaire et l'entraînement cardio. Ces installations sont
                            accessibles à tout moment, permettant aux joueurs de travailler sur leur condition physique en
                            dehors des séances d’entraînement programmées.</p>
                        <a class="read-more no-line green d-block text-center" href="{{ route('inscription') }}">Inscrivez-vous <span
                                class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <div id="carousel-3" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/entrainement1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/entrainement2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/terrain.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-3"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-3"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of services 2 -->

    <!----- Description----->
    <div class="container-fluid bg-light">
        <div class="container p-4">
            <h3 class="border-bottom">1. Objectifs de l’Académie</h3>
            <p>
                <strong>Développement des compétences footballistiques : </strong> Mets l'accent sur la progression des
                joueurs dans les aspects techniques (contrôle, passe, dribble, tir), tactiques (lecture du jeu,
                positionnement), physiques (endurance, vitesse, force) et mentaux (résilience, leadership). Expose des
                objectifs concrets pour chaque niveau d'âge, visant la maîtrise des bases pour les plus jeunes et
                l'optimisation des compétences pour les plus avancés. <br>
                <strong>Développement personnel et éthique :</strong> Intègre des valeurs telles que le respect, la
                discipline, l’esprit d’équipe et la confiance en soi, en expliquant comment le football peut former les
                jeunes au-delà du sport, en les préparant à des défis dans d’autres domaines de la vie. <br>
                <strong>Encouragement de la performance scolaire et de la santé : </strong> Pour promouvoir un équilibre
                entre le sport et la scolarité, tu pourrais proposer des programmes scolaires ou un soutien éducatif. Les
                valeurs d'un mode de vie sain peuvent aussi être inculquées avec des conseils de nutrition, de bien-être
                mental et de gestion du stress.
            </p>
        </div>

        <div class="container p-4">
            <h3 class="border-bottom">2. Structure de la Formation</h3>
            <p>
                <strong>Catégories d’âge et niveaux de compétence :</strong>Organise les joueurs en différentes tranches
                d’âge, comme U10, U13, U15, U17, etc., pour adapter les entraînements aux besoins spécifiques de chaque
                groupe. Des niveaux de compétences au sein de chaque groupe peuvent aussi être mis en place, permettant aux
                jeunes de progresser dans des environnements adaptés à leurs compétences. <br>
            <p> <strong>Programme d’entraînement complet :</strong> Propose une approche diversifiée avec des entraînements
                hebdomadaires spécialisés :</p>
            <ul>
                <li>Sessions techniques (travail individuel sur la maîtrise du ballon, dribbles, frappes)</li>
                <li>Entraînements tactiques (positionnement, jeu en équipe, stratégie en match)</li>
                <li>Préparation physique (endurance, vitesse, agilité)</li>
                <li>Développement mental (confiance en soi, gestion de la pression, cohésion d’équipe).</li>
            </ul>
            <strong>Encouragement de la performance scolaire et de la santé : </strong> Pour promouvoir un équilibre entre
            le sport et la scolarité, tu pourrais proposer des programmes scolaires ou un soutien éducatif. Les valeurs d'un
            mode de vie sain peuvent aussi être inculquées avec des conseils de nutrition, de bien-être mental et de gestion
            du stress.
            </p>

            <p><strong> Éducation académique et équilibre :</strong> Si l'académie intègre un volet éducatif, une
                collaboration avec des enseignants permettrait de dispenser un enseignement parallèle, aidant les élèves à
                équilibrer études et sport. Une sensibilisation au respect des horaires, de la discipline, et des devoirs
                scolaires peut faire partie intégrante du programme.</p>
        </div>

        <div class="container p-4">
            <h3 class="border-bottom">3. Encadrement et Recrutement</h3>
            <p>
                <strong>Recrutement de formateurs qualifiés : </strong>Attire des entraîneurs et préparateurs physiques
                ayant une expérience dans le domaine, possédant des diplômes reconnus (comme la Licence UEFA ou équivalent)
                et un engagement envers le développement des jeunes. Un personnel de qualité favorise un encadrement
                professionnel et valorise l’image de l’académie. <br>
                <strong>Spécialisation des entraîneurs :</strong>Idéalement, chaque catégorie d'âge aurait des entraîneurs
                spécialisés. Par exemple, un entraîneur spécialisé dans le développement des compétences de base pour les
                jeunes catégories, et un autre, en tactique et performance pour les catégories avancées.<br>
                <strong>Procédure de sélection et critères d’admission : </strong>Organise des sessions de détection
                plusieurs fois par an, en précisant des critères pour évaluer les capacités techniques, le potentiel
                physique, la motivation et le caractère. Une évaluation régulière permet de suivre les progrès, tout en
                assurant un haut niveau de performance. <br>
                <strong>Suivi et mentorat individuel : </strong> Pour chaque joueur admis, tu pourrais mettre en place un
                suivi personnalisé qui couvre les objectifs sportifs et personnels. Un mentor (souvent un ancien joueur ou
                entraîneur) pourrait être désigné pour guider les jeunes talents dans leur développement personnel et
                professionnel.
            </p>
        </div>
    </div>
    <!-----end Description----->
@endsection
