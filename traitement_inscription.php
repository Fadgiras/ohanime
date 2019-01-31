<?php

include('bibliotheque.php');

// Vérifier que tous les champs obligatoires sont remplis



if ( empty($_POST['pseudo'])
  || empty($_POST['mot_de_passe'])
  || empty($_POST['mot_de_passe_2'])
  || empty($_POST['nom'])
  || empty($_POST['prenom'])
  || empty($_POST['rue'])
  || empty($_POST['ville'])
  || empty($_POST['postal'])
  || empty($_POST['mail'])
  || !isset($_POST['sexe']) )
  {
    $message = "Erreur de saisie.";
    $erreur = true;
  }
else
  {
    // Récupérer les valeurs de la formulaire
$pseudo = $_POST['pseudo'];
 $mot_de_passe = $_POST['mot_de_passe'];
 $mot_de_passe_2 = $_POST['mot_de_passe_2'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $rue = $_POST['rue'];
 $ville = $_POST['ville'];
 $postal = $_POST['postal'];
 $mail = $_POST['mail'];
 $sexe = $_POST['sexe'];
   
   if ($mot_de_passe != $mot_de_passe_2)
      {
        $message = 'Les mots de passe sont incoh&eacute;rents.';
        $erreur = true;
      }

    else
      {
        // Vérification que le client n'est pas déjà dans la base

        $connexion = connecter();
        $requete = "SELECT * FROM client WHERE pseudo = '$pseudo'";
        $resultat = mysqli_query($connexion, $requete);

        if (mysqli_num_rows($resultat) != 0)
          {
            $message = 'Le pseudo "'.$pseudo.'" est déjà pris.';
            $erreur = true;
         }

        else
          {
            // Ajout du client dans la base

$requete = "INSERT INTO client (pseudo, mot_de_passe,nom,prenom,mail, sexe, rue, ville, postal)
                        VALUES('$pseudo','$mot_de_passe','$nom','$prenom','$mail', '$sexe','$rue', '$ville', '$postal')";

            $resultat = mysqli_query($connexion, $requete);
            mysqli_close($connexion);
            
                $message = 'Pseudo "'.$pseudo.'" ajouté.';
                $erreur = false;

                // création d’une session
                $_SESSION['pseudo'] = $pseudo;
              
          }
      }

   
           
			
			   
///////////////////////////////////// PARTIE VISIBLE /////////////////////////////////////
include('entete.html');
echo $message;
if ($erreur)
  {
    echo ' <a href="compte.php">Veuillez r&eacute;essayer</a>';
  }
include('pied.html'); 
}
?>