<?php
    session_start();

    include("include/bdd.php");
    include("include/starter.php");

    //addAccount($bdd,"ste","123456","s.t@live.fr",10,1);

    loginForm(1, $bdd,1,"#");

    //bddInsert($bdd,"techno","'Debian'");

    function insert_all_techno_self($bdd){
        foreach(bddSelect($bdd,"select * from techno") as $k){
            if (isset($_SESSION['username'])){
                bddInsert($bdd,"account_technology","'".$_SESSION['usernameId']."','".$k["id"]."'");
            }
        }
    }

    function get_user_techno($bdd){
        echo "Technologies utilisé :<br/>";
        
        foreach(bddSelect($bdd,"select * from account_technology WHERE account_id=".$_SESSION['usernameId']) as $account_techno){
            //echo bddSelect($bdd,"select * from techno WHERE id=".$account_techno["techno"])["name"];
            foreach(bddSelect($bdd,"select * from techno WHERE id=".$account_techno["techno"]) as $temp_account_techno)
            echo "_ ".$temp_account_techno["techno_name"]."<br/>";

        }
    }

    function get_techno($bdd){
        echo "Liste des technos :<br/>";
        foreach(bddSelect($bdd,"select * from techno") as $temp_techno)
            echo "_ ".$temp_techno["techno_name"]."<br/>";
    }
    

?>

<div style="display:flex;">
    <div>
        <?php get_user_techno($bdd);?>
    </div>

    <div>
        <?php get_techno($bdd);?>
    </div>
</div>