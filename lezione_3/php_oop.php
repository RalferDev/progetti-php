<?php

class Utente{

    private $nome;
    protected $email;
    public bool $attivo;

    // Costruttore
    public function __construct(string $nome, string $email, bool $attivo) {
        $this->nome = $nome;
        $this->email = $email;
        $this->attivo = $attivo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function isAttivo(): bool {
        return $this->attivo;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setAttivo(bool $attivo): void {
        $this->attivo = $attivo;
    }

}


// Istanziazione (identica a Java)
$user = new Utente("Mario", "mario@example.com", true);
echo "Nome: " . $user->getNome() . "\n"; // Output: Mario
echo "Email: " . $user->getEmail() . "\n"; // Output: mario@example.com
echo "Stato: " . ($user->isAttivo() ? 'Attivo' : 'Non attivo') . "\n"; // Output: Attivo
