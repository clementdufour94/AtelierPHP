<?php include("inc/header.inc.php"); ?>








<?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "clement") // Verification du mdp rentrer 

    {

    // Si le mdp est bon on affiche le formulaire 

    ?>

            <div class="admin">  

            <form method="POST" action="insertion.php" enctype="multipart/form-data">

                  <h2> Description</h2> 
                

                <div class="form-group">
                    <label for="titre">Prénom</label>
                    <input type="texte" class="form-control" id="prenom" name="prenom">
                </div>

                <div class="form-group">
                    <label for="titre">Nom</label>
                    <input type="Nom" class="form-control" id="nom" name="nom">
                </div>

                <div class="form-group">
                    <label for="titre">Adresse</label>
                    <input type="adresse" class="form-control" id="adresse" name="adresse">
                </div>

                </div>

                <div class="form-group">
                    <label for="titre">Téléphone </label>
                    <input type="Téléphone " class="form-control " id="telephone" name="telephone">
                </div>

                <div class="form-group">
                    <label for="titre">email </label>
                    <input type="email " class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="contenu">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="contenu">URL image</label>
                    <input type="url" class="form-control" id="url" name="url"></textarea>
                </div>

                <h2>Experience </h2>

                <div class="form-group">
                    <label for="titre">Titre </label>
                    <input type="expt1 " class="form-control " id="expt1" name="expt1">
                </div>

                <div class="form-group">
                    <label for="titre">Experience </label>
                    <input type="experience1 " class="form-control " id="experience1" name="experience1">
                </div>

                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="date1 " class="form-control " id="date1" name="date1">
                </div>


                <div class="form-group">
                    <label for="titre">Titre </label>
                    <input type="expt2 " class="form-control " id="expt2" name="expt2">
                </div>

                <div class="form-group">
                    <label for="titre">Experience </label>
                    <input type="experience2 " class="form-control " id="experience2" name="experience2">
                </div>


                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="date2 " class="form-control " id="date2" name="date2">
                </div>


                <div class="form-group">
                    <label for="titre">Titre </label>
                    <input type="expt3 " class="form-control " id="expt3" name="expt3">
                </div>



                <div class="form-group">
                    <label for="titre">Experience </label>
                    <input type="experience3 " class="form-control " id="experience3" name="experience3">
                </div>

                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="date3 " class="form-control " id="date3" name="date3">
                </div>

                <div class="form-group">
                    <label for="titre">Titre </label>
                    <input type="expt4 " class="form-control " id="expt4" name="expt4">
                </div>

                <div class="form-group">
                    <label for="titre">Experience </label>
                    <input type="experience4 " class="form-control " id="experience4" name="experience4">
                </div>


                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="date4 " class="form-control " id="date4" name="date4">
                </div>

                <h2>Education</h2>

                <div class="form-group">
                    <label for="titre">Ecole </label>
                    <input type="ecole1 " class="form-control " id="ecole1" name="ecole1">
                </div>

                <div class="form-group">
                    <label for="titre">Diplome </label>
                    <input type="diplome1 " class="form-control " id="diplome1" name="diplome1">
                </div>

                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="ecole_date1 " class="form-control " id="ecole_date1" name="ecole_date1">
                </div>

                <div class="form-group">
                    <label for="titre">Ecole </label>
                    <input type="ecole2 " class="form-control " id="ecole2" name="ecole2">
                </div>

                <div class="form-group">
                    <label for="titre">Diplome </label>
                    <input type="diplome2 " class="form-control " id="diplome2" name="diplome2">
                </div>

                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="ecole_date2 " class="form-control " id="ecole_date2" name="ecole_date2">
                </div>

                <div class="form-group">
                    <label for="titre">Ecole </label>
                    <input type="ecole3 " class="form-control " id="ecole3" name="ecole3">
                </div>

                <div class="form-group">
                    <label for="titre">Diplome </label>
                    <input type="diplome3 " class="form-control " id="diplome3" name="diplome3">
                </div>

                <div class="form-group">
                    <label for="titre">Date </label>
                    <input type="ecole_date3 " class="form-control " id="ecole_date3" name="ecole_date3">
                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

            </form>

            
            <form method="POST" action="suppression.php" enctype="multipart/form-data"> 
        
        
                <button type="submit" class="btn btn-danger">Supprimer</button>
        
        
        
        
            </form>

                


            
            

            </div>

        <?php

    }

    else // Sinon, on affiche mdp eroné

    {

        echo '<p>Mot de passe éroné</p>';

    }

    ?>











<?php include("inc/footer.inc.php"); ?>