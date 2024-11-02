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

    <div class="container mt-5">
        <h5 class="text-center mb-4">Informations Personnelles</h5>
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

            <h5 class="text-center mb-4">Informations sur les Parents/Tuteurs</h5>
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

            <h5 class="text-center mb-4">Justificatifs</h5>

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
@endsection
