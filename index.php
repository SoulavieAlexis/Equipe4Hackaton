<?php
    session_start();

    include("include/bdd.php");
    include("include/starter.php");

    //tableAccount($bdd);
    //addAccount($bdd,"ste","123456","s.t@live.fr",10,1);

    loginForm(1, $bdd,1,"#");

    bddInsert($bdd,"account_last_techno",$_SESSION['username'].",$techno,$techno_id");

    foreach(bddSelect($bdd,"select * from account_last_techno") as $k){
        echo $k["techno_id"];
    }
    

?>