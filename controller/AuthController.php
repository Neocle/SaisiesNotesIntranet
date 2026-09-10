<?php

require_once 'model/Enseignant.php';

class AuthController {
    public Enseignant $enseignantModel;

    public function __construct(PDO $pdo) {
        $this->enseignantModel = new Enseignant($pdo);
    }

    public function login($data) {

    }
}