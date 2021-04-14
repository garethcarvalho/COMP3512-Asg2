<?php
    require_once('./php/config.inc.php');
    session_start();

    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //checks if user is logged in 
    if (checkUserLogin($pdo)){
        $_SESSION["is_user_logged_in"] = true;
        header("location: index.php");
        exit();
    }else{
        header("location: login.php");
        session_destroy();
        exit();
    }
    
    //logs into account when checks for email and password 
    function checkUserLogin($pdo){
        if(!isset($_POST['email'])){
            return false; 
        }
        try{
            $sql = "SELECT id, email, password FROM users WHERE email = :email";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":email", $_POST['email']);$statement -> execute();
            $users = $statement->fetch(PDO::FETCH_ASSOC);

            //checks for password to the inputted user id
            if(isset($_POST['password'])){
                $userpass = $_POST['password'];
                if ( password_verify($userpass, $users['password'])){
                    $_SESSION['uid'] = $users['id'];
                    return true;
                }
            }
            return false; 
        }
        catch(Exception $exception){
            return false; 
        }

    }
?>