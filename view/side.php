<aside>
    <div id="sidebar" class="sidebar">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <div class="avatar">
                    <img class="img_avatar" src="assets/img/avatar.svg" alt="AVATAR">
                    <h5>
                        <?php if (isset($_SESSION['prenom'])){ echo $_SESSION['prenom']." ". $_SESSION["nom"]; }else{ echo "-- --"; } ?>
                    </h5>
                </div>
            </li>
            <div class="cont-menu">
                <li ><h5>PROFIL:</h5></li>
                <li><p><i class="fa fa-briefcase"></i><?php if (isset($_SESSION['service'])){ echo $_SESSION['service']; }else{ echo "-- --"; } ?></p></li>
                <li><p><i class="fa fa-drivers-license"></i><?php if (isset($_SESSION['grade'])){ echo $_SESSION['grade']; }else{ echo "-- --"; } ?></p></li>
                <li><a href="edition-profil.php"><p><i class="fa fa-gear"></i>Plus...</p></a></li>
                <!-- OUTILS-->
                <li ><h5 class="">OUTILS:</h5></li>
                <li class="sub-menu">
                    <a href="" ><i class="fa fa-plus"></i><span>Trajets / Frais</span></a>
                    <ul class="sub">
                        <li><a href="historique.php"><i class="fa fa-clock-o"></i>Historique</a></li>
                        <li><a href="creation_trajet.php"><i class="fa fa-car"></i>Nouveau trajet</a></li>
                    </ul>
                </li>
                <!-- VALIDATION-->
                <li class="sub-menu">
                    <a class="" href=""><i class="fa fa-check"></i><span>Validation</span></a>
                    <ul class="sub">
                        <li><a href="#"><i class="fa fa-check"></i>Valider un trajet</a></li>
                    </ul>
                </li>
                <!-- DECONNEXION -->
                <li> 
                    <a class="" href="model/deconnexion.php"><i class="fa fa-power-off"></i><span>DECONNEXION</span></a>
                </li>
            </div>
        </ul>
    </div>
</aside>