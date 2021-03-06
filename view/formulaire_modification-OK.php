<?php
    $affiche_trajet = $bdd->prepare("SELECT * FROM trajets WHERE id_trajet = ?");
    $affiche_trajet->execute(array($_GET["id_trajet"]));
    while($trajet = $affiche_trajet->fetch()){

        $id_trajet = $trajet['id_trajet'];
        $date_trajet = $trajet['date_trajet'];
        $heure_administrative = $trajet['heure_administrative'];
        $heure_domicile = $trajet['heure_domicile'];
        $nom_commune =  $trajet['nom_commune'];
        $heure_arrivee = $trajet['heure_arrivee'];
        $heure_depart = $trajet['heure_depart'];
        $fin_mission = $trajet['fin_mission'];
        $km_aglomeration = $trajet['km_aglomeration'];
        $km_hors = $trajet['km_hors'];
        $transport = $trajet['transport'];
        $motif = $trajet['motif'];
        $status_trajet = $trajet['status_trajet'];
    }

    if (isset($_POST["modif-trajet"])){
        // MODIF DATE TRAJET
        if(isset($_POST["modif-date-trajet"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET date_trajet = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-date-trajet'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF HEURE ADMINISTRATIVE
        if(isset($_POST["modif-heure-administrative"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET heure_administrative = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-heure-administrative'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF HEURE DOMICILE
        if(isset($_POST["modif-heure-domicile"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET heure_domicile = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-heure-domicile'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF NOM COMMUNE
        if(isset($_POST["modif-heure-domicile"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET nom_commune = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-nom-commune'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF NOM ARRIVEE
        if(isset($_POST["modif-heure-arrivee"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET heure_arrivee = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-heure-arrivee'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF NOM DEPART
        if(isset($_POST["modif-heure-depart"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET heure_depart = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-heure-depart'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF FIN MISSION
        if(isset($_POST["modif-fin-mission"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET fin_mission = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-fin-mission'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF KM AGLOMERATION
        if(isset($_POST["modif-km-aglomeration"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET km_aglomeration = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-km-aglomeration'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF KM HORS
        if(isset($_POST["modif-km-hors"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET km_hors = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-km-hors'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
        // MODIF MOTIF
        if(isset($_POST["modif-motif"])){
            $modif_trajet = $bdd->prepare("UPDATE trajets SET motif = ? WHERE id_trajet = ? ");
            $modif_trajet->execute(array($_POST['modif-motif'], $id_trajet));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
    }   
?>



<!--MAIN-->
<section id="main-content">
    <section class="wrapper">
        <!-- FORM -->
        <div class="container form-frais">
            <div class="titre-page">
            <h2><i class="fa fa-pencil pad-ico-profil"></i><span> MODIFICATION DE TRAJET</span><h2>
            </div>
            <form action="" method="POST">
                <!--Date et heure de départ-->
                <h4>Date et heure de départ.</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="date-trajet">Date:</label>
                        <input type="date" name="modif-date-trajet" class="form-control" id="date-trajet" placeholder="Heure" value="<?php echo $date_trajet; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="heure-administrative">Départ résidence administrative:</label>
                        <input type="time" name="modif-heure-administrative" class="form-control" id="heure-administrative" placeholder="résidence administrative" value="<?php echo $heure_administrative; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="heure-domicile">Départ domicile:</label>
                        <input type="time" name="modif-heure-domicile" class="form-control" id="heure-domicile" placeholder="Domicile" value="<?php echo $heure_domicile; ?>">
                    </div>
                </div>
                <!--Commune visitée-->
                <h4>Commune visitée.</h4>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="nom-commune">Nom:</label>
                        <input type="text" name="modif-nom-commune" class="form-control" id="nom-commune" placeholder="Ex: Namur" value="<?php echo $nom_commune; ?>" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="heure-arrivee">Heure d'arrivée:</label>
                        <input type="time" name="modif-heure-arrivee" class="form-control" id="heure-arrivee" placeholder="" value="<?php echo $heure_arrivee; ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="heure-depart">Heure de retour:</label>
                        <input type="time" name="modif-heure-depart" class="form-control" id="heure-depart" placeholder="" value="<?php echo $heure_depart; ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fin-mission">Heure de fin de mission:</label>
                        <input type="time" name="modif-fin-mission" class="form-control" id="fin-mission" placeholder="" value="<?php echo $fin_mission; ?>">
                    </div>
                </div>
                <!--KM parcourus-->
                <h4>Kilomètres parcourus.</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="km-aglomeration">Dans l'agomération:</label>
                        <input type="number" name="modif-km-aglomeration" class="form-control" id="km-aglomeration" placeholder="Ex: 10" step="0.01" value="<?php echo $km_aglomeration; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="km-hors">Hors aglomération:</label>
                        <input type="number" name="modif-km-hors" class="form-control" id="km-hors" placeholder="Ex: 10" step="0.01" value="<?php echo $km_hors; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="transport">Transport en commun:</label>
                        <input type="number" name="modif-transport" class="form-control" id="transport" placeholder="Ex: 2,50" step="0.01" value="<?php echo $transport; ?>">
                    </div>
                </div>
                <!--Séjours-->
                <!-- <h4>Séjours.</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="transport">Temps de séjours:</label>
                        <select class="form-control" name="temps-sejour">
                            <option value="">Sélectionner une durée</option>
                            <option value="1">+ 5h à - 8h</option>
                            <option value="2">8h et plus</option>
                            <option value="3">Nuitées</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport">Frais réels limités au plafond:</label>
                        <input type="number" name="frais-reel" class="form-control" id="transport" placeholder="Ex: 2,50" step="0.01" value="">
                    </div>
                </div> -->
                <!--Motif-->
                <div class="form-group">
                    <label for="motif">Motif:</label>
                    <textarea class="form-control" name="modif-motif" id="motif" rows="3" value="<?php echo $motif; ?>"><?php echo $motif; ?></textarea>
                </div>
                <!--certification-->
                <div class="form-group">
                    <div class="form-check">
                        <p>
                            <input class="form-check-input" name="cert1" type="checkbox" id="certif1">
                            <label class="form-check-label" for="certif1">Je déclare de ne pas bénéficier d'un libre parcours et/ou de bénéficier d'une rédution sur les chemins de fer et autobus.</label>
                        </p>
                        <p>
                            <input class="form-check-input" name="cert2" type="checkbox" id="certif2">
                            <label class="form-check-label" for="certif2">J'affirme sur l'honneur que cette déclaration est sincère et complète à la somme de quarante et un euro, dix-huit cents.</label>
                        </p>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="modif-trajet" value="Modifier le formulaire">
               
            </form>
        </div>
    </section>
</section>