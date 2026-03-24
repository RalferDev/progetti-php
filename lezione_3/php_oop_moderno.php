<?php
declare(strict_types=1);
require_once 'php_oop.php'; // Aggiungi questo per importare la classe Utente dall'altro file

class UtenteModerno {

    // PHP dichiara e assegna automaticamente le proprietà!
    public function __construct(
        private string $nome,
        protected string $email,
        public bool $attivo = true // Valore di default
    ) {}

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function isAttivo(): bool {
        return $this->attivo;
    }
}

// Istanziazione (identica a Java)
$user = new UtenteModerno("Raffaele", "raffaele@example.com", false); 
echo "Nome: " . $user->getNome() . "\n"; // Output: Raffaele
echo "Email: " . $user->getEmail() . "\n"; // Output: raffaele@example.com
echo "Stato: " . ($user->isAttivo() ? 'Attivo' : 'Non attivo') . "\n"; // Output: Non attivo 

$oldUser = new Utente("Mario", "mario@example.com", true);
echo "Nome: " . $oldUser->getNome() . "\n"; // Output: Mario
echo "Email: " . $oldUser->getEmail() . "\n"; // Output: mario@example.com
echo "Stato: " . ($oldUser->isAttivo() ? 'Attivo' : 'Non attivo') . "\n"; // Output: Attivo