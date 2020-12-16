<?php

function passwordCrypt($pass){
    $salt = "48@!alsd";
	$pass2 = md5(md5($pass).$salt);
    return $pass2;
}

function Ip()
{
	$ip = ($ip = getenv('HTTP_FORWARDED_FOR')) ? $ip :
	($ip = getenv('HTTP_X_FORWARDED_FOR'))     ? $ip :
	($ip = getenv('HTTP_X_COMING_FROM'))       ? $ip :
	($ip = getenv('HTTP_VIA'))                 ? $ip :
	($ip = getenv('HTTP_XROXY_CONNECTION'))    ? $ip :
	($ip = getenv('HTTP_CLIENT_IP'))           ? $ip :
	($ip = getenv('REMOTE_ADDR'))              ? $ip :
	'0.0.0.0';
	return $ip;
}


function tableAccount($bdd){
    $sql = "CREATE TABLE account (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(70) NOT NULL,
    email VARCHAR(50),
    level INT(6),
    ip VARCHAR(50),
    token VARCHAR(150),
    confirm INT(2),
    registerDate TIMESTAMP
    )";
    $bdd->exec($sql);
    $bdd = null;
    
}

function addAccount($bdd,$username,$password,$email,$level,$confirm){
    
    $username= htmlspecialchars($username);
    $password= htmlspecialchars($password);
    $password = passwordCrypt($password);
    $email= htmlspecialchars($email);
    $level= htmlspecialchars($level);
    $confirm= htmlspecialchars($confirm);
    
    $ip = Ip();
    $token = uniqid(rand(), true);

    $stmt = $bdd->prepare("SELECT id FROM account WHERE username=:username");
    $stmt->bindParam(':username', $username);

    $stmt->execute();
    $resultat = $stmt->fetch();
    $stmt->closeCursor();

    if ($resultat){
        echo "Compte déjà éxistant";
        sleep(2);
    }else{
        $stmt = $bdd->prepare('INSERT INTO account 
        ( username, password, email, level, ip,token, confirm, registerDate) 
        VALUES 
        ( :username, :password, :email, :level, :ip, :token, :confirm, NOW())');

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':ip', $ip);
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':confirm', $confirm);

        $stmt->execute();
        $resultat = $stmt->fetch();
        $stmt->closeCursor();
        
        $stmt = $bdd->prepare("SELECT id FROM account ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $resultat = $stmt->fetch();
        $stmt->closeCursor();
    }
}

function loginForm($log, $bdd,$display,$action){
    if ($display == 1){
        $out = '
            <form method="post" action="" id="loginForm">
                
                
        ';
    }
    if (!isset($_SESSION['username']) and empty($_SESSION['username'])){
        
        $out = '
            <form method="post" action="" id="loginForm">
                <div id="loginTitre">Se connecter</div>
                <center>
                    <input type="text" name="username" placeholder="Nom d\'utilisateur" /><br/>
                    <input type="password" name="password" placeholder="Mot de passe"/><br/>
                    <input type="submit" value="Envoyer" />
                
        ';
        
        if (isset($_POST['username']) and !empty($_POST['username'])
            and isset($_POST['password']) and !empty($_POST['password'])
           ){
            
            $username= htmlspecialchars($_POST['username']);
            $password= htmlspecialchars($_POST['password']);
            
            

            $password = passwordCrypt($password);

            $stmt = $bdd->prepare("SELECT id,confirm FROM account WHERE username=:username AND password=:password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
            $resultat = $stmt->fetch();
            $stmt->closeCursor();
            $stmt = NULL;

            if ($resultat){
                $_SESSION['username'] = $username;
                $_SESSION['accountConfirm'] = $resultat["confirm"];
                $_SESSION['usernameId'] = $resultat["id"];
                header('Location: '.$action);
                exit();
            }else{
                sleep(2);
            }
        }
        
    }else {$out.= "Vous êtes deja connecter.<br /> <a href='logout.php'>Se deconnecter</a>";}
    
    $out.="</center>
            </form>";
    echo $out;
}

function start($servername,$username,$password,$name){

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE ".$name;
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
        
        $fp = fopen('core/bdd.php', 'w');
        fwrite($fp, "<?php try {  ".'$bdd'."  = new PDO('mysql:host=".$servername.";dbname=".$name."', '".$username."', '".$password."');
         ".'$bdd'."->exec('SET CHARACTER SET utf8');
        global  ".'$bdd'.";
    }catch(Exception  ".'$e'."){die('Erreur : '.".'$e'."->getMessage());}
?>
        ");
        fclose($fp);
        
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;
    
}

function bddInsert($bdd,$table,$value){
    
    $atribut ="";
    
    $reponse=$bdd->query("SHOW COLUMNS FROM $table");
    while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
    {
        if ($donnees["Field"] !== "id"){
            $atribut .= $donnees["Field"].",";
        }
    }
    $atribut = substr($atribut, 0, -1);
    
    $stmt = $bdd->prepare("INSERT INTO $table ($atribut) VALUES ($value)");

    $stmt->execute();
    $resultat = $stmt->fetch();
    $stmt->closeCursor();

}

function bddInsertExt($bdd,$table,$atribut,$value){
    
    $stmt = $bdd->prepare("INSERT INTO $table ($atribut) VALUES ($value)");

    $stmt->execute();
    $resultat = $stmt->fetch();
    $stmt->closeCursor();

}

function bddUpdate($bdd,$table,$col,$val,$where){
    $stmt = $bdd->prepare("UPDATE $table SET $col = '$val' WHERE $where");
    $stmt->execute();
    $stmt->closeCursor();
}

function bddDelete($bdd,$table,$where){
    $stmt = $bdd->prepare("DELETE FROM $table WHERE $where");
    $stmt->execute();
    $stmt->closeCursor();
}

function bddCount($bdd,$table){
    $nbArticle=$bdd->query("select count(id) as total FROM $table"); 
    $nbArticle=$nbArticle->fetch();
    return $nbArticle["total"];
}

function bddCountWhere($bdd,$table,$where){
    $nbArticle=$bdd->query("select count(id) as total FROM $table WHERE $where"); 
    $nbArticle=$nbArticle->fetch();
    return $nbArticle["total"];
}

function bddSelect($bdd,$val){
    $return = array();
    $req = $bdd->prepare($val);
    $req->execute();
    while($projectIn = $req->fetch()) 
    {
        array_push($return, $projectIn);
    }
    $req->closeCursor();
    return $return;
}




?>