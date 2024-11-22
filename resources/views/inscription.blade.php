@extends('layouts.master')

@section('title', 'Inscription')

@section('content')

<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Inscrivez-vous maintenant</h1>
            </div>
        </div>
    </div>
</header>

<style>
    .clock {
        font-size: 60px;
        background-color: #333;
        color: #fff;
        padding: 20px 50px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

    }
</style>

<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <div class="clock w-md-50 text-center " id="clock">
            <!-- L'heure sera affichée ici -->
        </div>
    </div>

    <div class="section-header text-center mt-4 ">
        <h2>Comment s'inscrire ?</h2>
    </div>

    <!-- Étapes d'inscription -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <p>1. La première démarche est de prendre connaissance de l’ensemble du site, et en particulier cette page.</p>
        </div>
        <div class="col-md-6 mb-4">
            <p>2. Remplir ensuite le formulaire d’inscription : le télécharger, l’enregistrer sur votre bureau, et nous le renvoyer.</p>
            <div>
                <button class="btn btn-warning" onclick="ouvrirPDF()">Cliquez ici POUR TÉLÉCHARGER LE FORMULAIRE D'INSCRIPTION</button>
            </div>
        </div>
    </div>

    <!-- Alerte sur les frais d'inscription -->
    <div class="bg-success mt-4">
        <p class="text-center text-white mb-0">Pour les recrutements promotionnels, les frais d'inscription sont à 120€ (78.000 F CFA).</p>
    </div>



</div>

<div class="container mt-4">
    <!-- Titre principal -->
    <div class="text-center mb-5">
        <h2>Conditions d'Admission</h2>
        <p class="lead">Veuillez prendre connaissance des conditions avant de vous inscrire.</p>
    </div>

    <!-- Card pour afficher les conditions d'admission -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">1. Âge</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">De 05 à 17 ans pour les jeunes</li>
                <li class="list-group-item">De 18 à 28 ans pour les seniors</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">2. Capacité</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Avoir des preuves de compétences sportives</li>
                <li class="list-group-item">Avoir une bonne moralité</li>
                <li class="list-group-item">Avoir une pièce d’identité valide</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">3. Frais d’inscription</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Les frais d’inscription sont de <strong>130 €</strong> pour les recrutements en Afrique sponsorisés.
            </p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">4. Durée</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Les frais d’inscription doivent être payés dans un délai de <strong>72 heures</strong> à compter de la date d’approbation du dossier du postulant.
            </p>
        </div>
    </div>

    <!-- Alerte pour attirer l'attention -->
    <div class="alert alert-warning" role="alert">
        Veuillez vous assurer que vous remplissez toutes les conditions avant de soumettre votre inscription.
    </div>

</div>

<div class="container">
    <!-- Titre principal -->
    <div class="section-header text-center">
        <h2>Informations Importantes</h2>
    </div>

    <!-- Question 1 : Que faire sans passeport ou visa ? -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Que faire si je n'ai pas un Passeport ou un Visa ?</strong>
        <p>Les postulants en Afrique pourront solliciter de l'aide pour obtenir un passeport et un visa en cas de recrutement promotionnel. <strong>Veuillez contacter un manager de l'académie pour plus d'informations.</strong></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Question 2 : Qui doit s'occuper du billet d'avion ? -->
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Qui devrait s'occuper du billet d'avion ?</strong>
        <p>Le billet d'avion serait fourni par l'académie (sous un contrat) si le postulant s'inscrit aux modalités promotionnelles.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Question 3 : Note importante à propos des promotions -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>NOTEZ BIEN !!!</strong>
        <p>A l'exception de ces promotions, le postulant devra assumer l'intégralité des frais relatifs à la modalité d'inscription.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
</div>


<div class="container mt-5">
    <h2 class="text-center mb-4">Formulaire d'inscription</h2>
    <h5 class=" mb-4">Informations Personnelles</h5>
    <form action="{{ route('inscription.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Nom complet -->
        <div class="row mb-3">

            <div class="col-md-6">
                <label for="lastName" class="form-label">Nom de famille</label>
                <input required type="text" class="form-control @error('lastName') is-invalid @enderror"
                    id="lastName" name="lastName" placeholder="Entrez votre nom de famille"
                    value="{{ old('lastName') }}">
                @error('lastName')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="firstName" class="form-label">Prénom</label>
                <input required type="text" class="form-control @error('firstName') is-invalid @enderror"
                    id="firstName" name="firstName" placeholder="Entrez votre prénom" value="{{ old('firstName') }}">
                @error('firstName')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Date et Lieu de naissance -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birthDate" class="form-label">Date de naissance</label>
                <input required type="date" class="form-control @error('birthDate') is-invalid @enderror"
                    id="birthDate" name="birthDate" value="{{ old('birthDate') }}">
                @error('birthDate')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="birthPlace" class="form-label">Lieu de naissance</label>
                <input required type="text" class="form-control @error('birthPlace') is-invalid @enderror"
                    id="birthPlace" name="birthPlace" placeholder="Entrez le lieu de naissance"
                    value="{{ old('birthPlace') }}">
                @error('birthPlace')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Nationalité et Numéro d'identification -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nationality" class="form-label">Nationalité</label>
                <input required type="text" class="form-control @error('nationality') is-invalid @enderror"
                    id="nationality" name="nationality" placeholder="Entrez votre nationalité"
                    value="{{ old('nationality') }}">
                @error('nationality')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="idNumber" class="form-label">Numéro d'identification</label>
                <input required type="text" class="form-control @error('idNumber') is-invalid @enderror"
                    id="idNumber" name="idNumber" placeholder="Exemple : CNI ou Passeport"
                    value="{{ old('idNumber') }}">
                @error('idNumber')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Sexe -->
        <div class="mb-3">
            <label for="gender" class="form-label">Sexe</label>
            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                <option selected>Choisissez...</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculin</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Féminin</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Autre</option>
            </select>
            @error('gender')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <h5 class=" mb-4">Informations sur les Parents/Tuteurs</h5>
        <div class="row mb-3">
            <!-- Nom et Prénom du parent/tuteur principal -->
            <div class="col-md-6">
                <label for="primaryGuardianName" class="form-label">Nom du parent/tuteur principal</label>
                <input required type="text" class="form-control @error('primaryGuardianName') is-invalid @enderror"
                    id="primaryGuardianName" name="primaryGuardianName"
                    placeholder="Entrez le nom du parent ou tuteur principal" value="{{ old('primaryGuardianName') }}">
                @error('primaryGuardianName')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="primaryGuardianProfession" class="form-label">Profession du parent/tuteur principal</label>
                <input required type="text"
                    class="form-control @error('primaryGuardianProfession') is-invalid @enderror"
                    id="primaryGuardianProfession" name="primaryGuardianProfession"
                    placeholder="Profession du parent ou tuteur principal"
                    value="{{ old('primaryGuardianProfession') }}">
                @error('primaryGuardianProfession')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Adresse et Téléphone du parent/tuteur principal -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="primaryGuardianAddress" class="form-label">Adresse du parent/tuteur</label>
                <input required type="text"
                    class="form-control @error('primaryGuardianAddress') is-invalid @enderror"
                    id="primaryGuardianAddress" name="primaryGuardianAddress"
                    placeholder="Adresse complète du parent ou tuteur principal"
                    value="{{ old('primaryGuardianAddress') }}">
                @error('primaryGuardianAddress')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="primaryGuardianPhone" class="form-label">Numéro de téléphone</label>
                <input required type="tel"
                    class="form-control @error('primaryGuardianPhone') is-invalid @enderror"
                    id="primaryGuardianPhone" name="primaryGuardianPhone"
                    placeholder="Téléphone du parent/tuteur principal" value="{{ old('primaryGuardianPhone') }}">
                @error('primaryGuardianPhone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- E-mail du parent/tuteur principal -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="primaryGuardianEmail" class="form-label">E-mail du parent/tuteur</label>
                <input required type="email"
                    class="form-control @error('primaryGuardianEmail') is-invalid @enderror"
                    id="primaryGuardianEmail" name="primaryGuardianEmail"
                    placeholder="E-mail du parent/tuteur principal" value="{{ old('primaryGuardianEmail') }}">
                @error('primaryGuardianEmail')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <h5 class=" mb-4">Justificatifs</h5>

        <div class="row">
            <!-- Certificat de naissance -->
            <div class="col-md-6 mb-3">
                <label for="birthCertificate" class="form-label">Certificat de naissance</label>
                <input required type="file" class="form-control @error('birthCertificate') is-invalid @enderror"
                    id="birthCertificate" name="birthCertificate">
                @error('birthCertificate')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Dossier médical -->
            <div class="col-md-6 mb-3">
                <label for="medicalRecord" class="form-label">Dossier médical</label>
                <input required type="file" class="form-control @error('medicalRecord') is-invalid @enderror"
                    id="medicalRecord" name="medicalRecord">
                @error('medicalRecord')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- Bulletins ou relevés de notes précédents -->
            <div class="col-md-6 mb-3">
                <label for="transcript" class="form-label">Bulletins ou relevés de notes précédents</label>
                <input required type="file" class="form-control @error('transcript') is-invalid @enderror"
                    id="transcript" name="transcript">
                @error('transcript')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Pièce d'identité de l'élève -->
            <div class="col-md-6 mb-3">
                <label for="studentID" class="form-label">Pièce d'identité de l'élève</label>
                <input required type="file" class="form-control @error('studentID') is-invalid @enderror"
                    id="studentID" name="studentID">
                @error('studentID')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- Photocopie de la carte d'identité des parents/tuteurs -->
            <div class="col-md-6 mb-3">
                <label for="guardianID" class="form-label">Photocopie de la carte d'identité des
                    parents/tuteurs</label>
                <input required type="file" class="form-control @error('guardianID') is-invalid @enderror"
                    id="guardianID" name="guardianID">
                @error('guardianID')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <!-- Bouton de soumission -->
        <div class="text-justify px-3 my-3">
            <button type="submit" class="btn"
                style="background-color: #161223; color: #ffffff;">Soumettre</button>
        </div>
    </form>
</div>

<div class="container">
    <!-- Titre principal -->
    <div class="section-header text-center">
        <h2>Modalités d’Inscription</h2>
        <p class="lead">Programmes annuel, long terme et court de l’Académie Internationale de Football</p>
    </div>

    <!-- Modalités d'inscription au programme annuel ou long terme -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">Modalités d’inscription au programme annuel ou long terme</h5>
        </div>
        <div class="card-body">
            <p><strong>Durée :</strong> Du 2023 au 2024</p>
            <p><strong>Prix :</strong> 12 950 € (<em>supplément chambre single 3 890 €</em>)</p>
            <p><strong>Frais d’inscription :</strong> Offert</p>
        </div>
    </div>

    <!-- Modalités d'inscription au programme court -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">Modalités d’inscription au programme court</h5>
        </div>
        <div class="card-body">
            <p><strong>Prix :</strong> 8 600 € (<em>supplément chambre single 3 840 €</em>)</p>
            <p><strong>Frais d’inscription :</strong> Offert</p>
        </div>
    </div>

    <!-- Coût des programmes -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">Le coût du programme comprend :</h5>
        </div>
        <div class="card-body">
            <h6>1. Pension complète :</h6>
            <ul class="list-group modalities-list">
                <li class="list-group-item">Logement au centre sportif d’Antibes en chambre à 2 lits</li>
                <li class="list-group-item">Restauration sur place en pension complète</li>
            </ul>
            
            <h6>2. Football :</h6>
            <ul class="list-group modalities-list">
                <li class="list-group-item">Essais dans un ou plusieurs clubs pour évaluer son niveau</li>
                <li class="list-group-item">Entraînements avec l’Académie, travail technique individuel et collectif</li>
                <li class="list-group-item">Analyse vidéo</li>
                <li class="list-group-item">Inscription, licence, entraînements et match de championnat dans un club affilié à la FFF</li>
                <li class="list-group-item">Séances de travail physique en salle de gym ou en extérieur</li>
                <li class="list-group-item">Organisation d’essais dans des clubs professionnels en fin d’année</li>
                <li class="list-group-item">Equipement sportif de l’Académie (survêtement, short, maillot)</li>
            </ul>

            <h6>3. Transport :</h6>
            <ul class="list-group modalities-list">
                <li class="list-group-item">Accueil et transferts de l’aéroport de Nice</li>
                <li class="list-group-item">Carte d’abonnement de bus ou train sur toute la ville d’Antibes</li>
                <li class="list-group-item">Transport aux matchs à l’extérieur assuré par le club</li>
            </ul>

            <h6>4. Management et assistance :</h6>
            <ul class="list-group modalities-list">
                <li class="list-group-item">Encadrement et suivi par les responsables de l’Académie</li>
                <li class="list-group-item">Assurance Responsabilité Civile</li>
                <li class="list-group-item">Lettre d’invitation pour visa si nécessaire</li>
            </ul>
        </div>
    </div>

    <!-- Suppléments pour éducation et cours de langue -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">En supplément :</h5>
        </div>
        <div class="card-body">
            <ul class="list-group modalities-list">
                <li class="list-group-item"><strong>Education – Etudes :</strong> 1600 € (hors méthode)</li>
                <li class="list-group-item"><strong>Encadrement tutorial pour cours en ligne :</strong> 4 après-midis par semaine, 30 semaines par an</li>
                <li class="list-group-item"><strong>Cours de français :</strong> 3300 € (niveau débutant et intermédiaire, 2 matinées par semaine, 30 semaines par an)</li>
                <li class="list-group-item"><strong>Cours d’anglais :</strong> 1900 €</li>
            </ul>
        </div>
    </div>

    <!-- Inscription et modalités de règlement -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">Inscription et modalités de règlement</h5>
        </div>
        <div class="card-body">
            <p><strong>Les inscriptions commencent :</strong> Janvier 2024</p>
            <p><strong>Conditions :</strong> L’inscription est prise en compte si elle est écrite et signée par les parents. Elle est acceptée dans la limite des places disponibles.</p>
            <p><strong>Paiement des frais :</strong> Les frais d’inscription doivent être réglés dans un délai de 72 heures après l’approbation du dossier pour obtenir le reçu d’enregistrement.</p>
        </div>
    </div>

    <!-- Contact -->
    <div class="card mb-4">
        <div class="card-header bg-primary-custom">
            <h5 class="card-title">Contact</h5>
        </div>
        <div class="card-body">
            <p><strong>Adresse de l’Académie :</strong> 60 Av. du 11 Novembre, 06600 Antibes, France</p>
            <p class="note">Les inscriptions prendront fin bientôt. Veuillez finaliser votre inscription dans les plus brefs délais.</p>
        </div>
    </div>

    <!-- Lien pour joindre un manager -->
    <div class="text-center mb-4">
        <a href="mailto:manager@academie.com" class="btn btn-primary btn-lg">Cliquez ICI POUR JOINDRE UN MANAGER EN AFRIQUE</a>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();

        // Ajout d'un zéro devant si l'heure, les minutes ou les secondes sont inférieurs à 10
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        // Affichage de l'heure au format HH:MM:SS
        document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
    }

    // Mise à jour de l'heure chaque seconde
    setInterval(updateClock, 1000);

    // Initialisation de l'heure dès le chargement de la page
    updateClock();
</script>

<script>
    function ouvrirPDF() {
        // Remplace "Formulaire-dinscription-1.pdf" par le chemin vers ton fichier PDF
        window.open('Formulaire-dinscription-1.pdf', '_blank');
    }
</script>
@endsection