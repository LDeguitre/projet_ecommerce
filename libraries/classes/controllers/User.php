<?php

namespace Controllers;

class User extends Controller
{
    protected $modelName = 'user';

    public function open( )
    {

        $path = filter_input(INPUT_GET, 'path');
        $pageTitle = filter_input(INPUT_GET, 'pageTitle');

        \Renderer::render($path, compact('pageTitle'));
    }


    public function login()
    {
        $user = $this->model->findUser();
        $id_user = $this->model-> get("id_user", "name", $user);
        if($user == "") {
            print "<script>alert('Adresse email ou mot de passe incorrect');</script>";
            \Renderer::render("user/login");
        } else {
            session_create_id();
            $_SESSION['logged_in'] = true;
            $_SESSION['timestamp'] = time();
            $_SESSION['id_user'] = $id_user;
            $_SESSION['user'] = $user;

            if($_SESSION['order'] ==  true) {
                \Http::redirect("index.php?controller=user&task=show_cart");
            } else {
                \Http::redirect("index.php?controller=product&task=index");
            }

        }
    }

    public function logout()

    {   session_unset();
        session_destroy();
        \Http::redirect("index.php");
    }



    public function register()
    {

        $rexSafety = "/[a-zA-Z-' ]*$/";

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!preg_match($rexSafety, $firstName) || !preg_match($rexSafety, $name)) {
            print "<script>alert('Veuillez ne pas rentrer de caratere speciaux');</script>";
            \Renderer::render("user/login");
        }


        $pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);
        $isTaken = $this->model->get("id_user", "pseudo", $pseudo);

        if($isTaken) {
            print "<script>alert('Pseudo déjà prit');</script>";
            \Renderer::render("user/login");

        }

        $birthday = filter_input(INPUT_POST, 'birthday');
        $birthday = date("Y-m-d H:i:s", strtotime($birthday));

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $isTaken = $this->model->get("id_user", "email", $email);

        if($isTaken) {
            print "<script>alert('Adresse e-mail déjà utilisé');</script>";
            \Renderer::render("user/login");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            print "<script>alert('Le format de l\\'adresse e-mail n\\'est pas valide');</script>";
            \Renderer::render("user/login");
        }

        $password = filter_input(INPUT_POST, 'pwd');
        $confirm = filter_input(INPUT_POST, 'confirm');

        if(strlen($password) < 5) {

            print "<script>alert('Veuillez entrer un mot de passe contenant au minimum 5 caractère');</script>";
            \Renderer::render("user/login");
        }

        if($password != $confirm) {
            print "<script>alert('Le mot de passe ne correspond pas');</script>";
            \Renderer::render("user/login");
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $password = $hashed_password;

        $createAt = date('Y-m-d H:i:s');
        $this->model->insert(compact('pseudo','firstName', 'name', 'birthday', 'email', 'password', 'createAt'));

        \Http::redirect("index.php?controller=user&task=open&path=user/login&pageTitle=Connexion");
    }
}