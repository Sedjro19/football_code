<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{

    public function store(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'birthDate' => 'required|date',
        'birthPlace' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'idNumber' => 'required|string|max:255',
        'gender' => 'required|string',
        'primaryGuardianName' => 'required|string|max:255',
        'primaryGuardianProfession' => 'required|string|max:255',
        'primaryGuardianAddress' => 'required|string|max:255',
        'primaryGuardianPhone' => 'required|string|max:20',
        'primaryGuardianEmail' => 'required|email',
        'birthCertificate' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'medicalRecord' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'transcript' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'studentID' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'guardianID' => 'required|file|mimes:jpg,jpeg,png,pdf',
    ]);

    // Récupérer les données
    $data = $request->all();

    // Enregistrer les fichiers et obtenir leur chemin
    $birthCertificatePath = $request->file('birthCertificate')->store('documents');
    $medicalRecordPath = $request->file('medicalRecord')->store('documents');
    $transcriptPath = $request->file('transcript')->store('documents');
    $studentIDPath = $request->file('studentID')->store('documents');
    $guardianIDPath = $request->file('guardianID')->store('documents');

    // Envoyer l'email avec les pièces jointes
    Mail::to($data['primaryGuardianEmail'])->send(new InscriptionMail($data, [
        'birthCertificate' => $birthCertificatePath,
        'medicalRecord' => $medicalRecordPath,
        'transcript' => $transcriptPath,
        'studentID' => $studentIDPath,
        'guardianID' => $guardianIDPath,
    ]));

    // Retourner une réponse ou rediriger l'utilisateur
    return redirect()->back()->with('success', 'Inscription réussie. Un email de confirmation a été envoyé.');
}


}
