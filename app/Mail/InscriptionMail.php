<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class InscriptionMail extends Mailable
    {
        use Queueable, SerializesModels;

        public $data;
        public $files; // Ajouter une propriété pour les fichiers

        /**
         * Crée une nouvelle instance de message.
         *
         * @param array $data
         * @param array $files Chemins des fichiers à attacher
         */
        public function __construct($data, $files)
        {
            $this->data = $data;
            $this->files = $files; // Initialiser la propriété des fichiers
        }

        /**
         * Obtenir l'enveloppe du message.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Inscription Mail',
            );
        }

        /**
         * Obtenir la définition du contenu du message.
         */
        public function content(): Content
        {
            return new Content(
                view: 'emails.inscriptionMail',
                with: ['data' => $this->data],
            );
        }

        /**
         * Obtenir les pièces jointes pour le message.
         *
         * @return array<int, \Illuminate\Mail\Mailables\Attachment>
         */
        public function attachments(): array
        {
            $attachments = [];


            return $attachments;
        }
    }
