<?php

class Enseignant {
    private PDO $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM Enseignants WHERE mail = :email AND mdp = :password";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}