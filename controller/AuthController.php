<?php

require_once 'model/Enseignant.php';
require_once 'util/FieldValidator.php';

class AuthController {
    public Enseignant $enseignantModel;

    public function __construct(PDO $pdo) {
        $this->enseignantModel = new Enseignant($pdo);
    }

    public function handle() {
        $method = $_SERVER["REQUEST_METHOD"];

        if (isset($_SESSION["id"])) {
            header("Location: /");
            exit;
        }

        if ($method === "GET") {
            include "view/login/index.php";
            exit;
        }

        if ($method === "POST")  {
            $this->login($_POST);
            exit;
        }
    }

    public function login($data) {
        $email = $data["email"];
        $password = $data["password"];

        if (!isset($email) || !isset($password) ||!validateEmail($email)) {
            $error = "L'email n'est pas valide";
            include "view/login/index.php";
            return;
        }

        $teacher = $this->enseignantModel->login($email, $password);

        if (!$teacher) {
            $error = "L'email ou mot de passe est incorrect";
            include "view/login/index.php";
            return;
        }

        $_SESSION["id"] = $teacher["IdEnseignant"];
        $_SESSION["nom"] = $teacher["nom"];
        $_SESSION["prenom"] = $teacher["prenom"];
        $_SESSION["mail"] = $teacher["mail"];

        header("Location: /");
    }

    public function logout() {
        session_unset();
        session_destroy();

        header("Location: /");
    }
}