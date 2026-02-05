<?php

namespace App\model;

use App\model\Database as ModelDatabase;
use App\model\User as ModelUser;
use PDO;

class UserManager
{
    private PDO $db;

    public function __construct()
    {
        $this->db  = ModelDatabase::getInstance()->getPDO();
    }

    public function getUserPassword()
    {
        $pdo = $this->db;
        $stmt = $pdo->prepare("SELECT username, password FROM users WHERE username = :username");
        $stmt->bindValue("username", $_POST["user"], PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetch(PDO::FETCH_ASSOC, ModelUser::class);
        return $users;
    }


    public function login()
    {
        global $twig;
        $user = $this->getUserPassword();

        if ($user) {
            if (password_verify($_POST['password'], $user["password"])) {
                // $_SESSION["user"] = true;
                header("Location: home.php");
            } else {
                echo $twig->render("bibliotheque/connexion.html.twig", [
                    "error" => "Le mot de passe est erroné"
                ]);
                
            }
        } else {
            echo $twig->render("bibliotheque/connexion.html.twig", [
                "error" => "Le login n'existe pas"
            ]);
        }
    }
}
