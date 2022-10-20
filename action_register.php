<?php
session_start();
require_once './includes/database.inc.php';

if (isset($_POST['register'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

//Check les conditions valides pour les données email, mot de passe et nom utilisateur
    //Check si tous les champs sont remplis
    if (!isset($username, $password, $confirm_password, $email)) 
        echo "<script type='text/javascript'>alert('Veuillez remplir tous les champs !')</script>";
    //Check si l'email est un email valide
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "<script type='text/javascript'>alert('Email invalide !');document.location='./register.php'</script>";
    //Check si le nom de l'utilisateur au 5 ou plus de caractere
    else if (strlen($username) <= 4)
        echo "<script type='text/javascript'>alert('Username invalide !');document.location='./register.php'</script>";
    //Check si le mot de passe est valide avec une regex
    else if(!preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$~', $password))
        echo "<script type='text/javascript'>alert('Mot de passe invalide !');document.location='./register.php'</script>";
    //Check si les 2 mots de passe saisi sont identiques
    else if ($password != $confirm_password)
        echo "<script type='text/javascript'>alert('Veuillez insérer le même mot de passe !');document.location='./register.php'</script>";
    //Si toutes les conditions sont valides, on insere les donnees de l'utilisateur pour la creation de son compte dans la base de donnee
    else
    {
        try 
        {
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // $sql = "INSERT INTO users (email, user_password, username) VALUES ('". $email ."', '". $password ."', '". $username ."')";
            // $conn->exec($sql);
            $register = $conn->prepare("INSERT INTO users (email, user_password, username) VALUES (?, ?, ?)");
            $register->execute([$email, $password, $username]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        echo "<script type='text/javascript'>alert('Votre compte a bien été créé');document.location='./index.php'</script>";
    }
}