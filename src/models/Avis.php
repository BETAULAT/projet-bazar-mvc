        <!-- 
        *************************************************************************
        *************************************************************************
        ***                                                                   ***                                                                    ***
        ***    EVALUATION PHP ORIENTE OBJET – DORANCO-SALLE 10 17/09/2021     ***
        ***                                                                   ***                                                                     ***
        *************************************************************************
        *************************************************************************
1-Créer une table ‘avis’ avec pour propriétés : -id(auto-incerment, int)
                                                -commentaire(text)
                                                -note (int)
                                                -utilisateur_id (in)
                                                -produit_id (int)
                                                -date (date)

2- Créer un model Avis.php et un controller AvisController.php et un dossier Avis dans le views. 
Ce dosssier contiendra une page commentaires.php et une page add.php. 
Créer les routes dans params.php : /avis/commentaire => AvisContrôleur, commentaires et /avis/add => AvisController, add -->
<!-- 
3- Sur la card de chaque produit sur la page app/index.php – générer l’affichage du nombre
    de commentaires (count() laissés sur le produit (s’il n’y en a aucun affichage 0 commentaires). Cela       
    signifie qu’il y aura une méthode findByProduit($id) ordonné par date DESC dans Avis.php qui sera 
    appelée dans la boucle foreach $produit as $produit).  Ensuite créer un lien ‘voir les commentaires’ à    
    côté du nombre commentaire qui amènera sur une page commentaires.php (voir 5-commentaires.php)       
    (le lien n’apparaîtra pas s’il n’y a aucun commentaire, à la place il y aura un lien ‘ajouter un commentaire’ 
    qui amènera sur une page add.php  (voir 4-add.php)).

4- add.php : contiendra le formulaire d’ajout de commentaire en lien avec le produit commenté et l’utilisateur qui pose le commentaire.

5- commentaires.php : Afficher tous les commentaires sur le produit dans des cards avec : le commentaire, la date (format français), le prénom de l’utilisateur qui a posté le commentaire et sa note attribué (note/5). Ajouter un bouton permettant de laisser un commentaire sur ce produit.
 
  solution :
 -->

<!-- 

<?php   -->

// class Commentaires extends Db
{
    // public static function create(array $data)
    {
        // $pdo=self::getDb();

        // $request="INSERT INTO commande(id, commentaire, note, utilisateur_id, produit_id, date) 
        // -- VALUES (:id, :commentaire, :note, :utilisateur_id, :produit_id, ;date)";
        // $response=  $pdo->prepare($request);
        // $response->execute($data);
        // return $pdo->lastInsertId();

    }
    
}

?>

 -->

