TAO Pratical Exercise Client    
Back-End Verion          


-----------------------------------------------------
Instruction concernant la conception de l'api rest  
-----------------------------------------------------

Objectif :

Créer une api rest qui retourne la liste des utilisateurs contenu dans la source des données(fichier CSV ou fichier JSON)



--------------------------
Spécification techniques 
--------------------------

Utilisation de méthode GET

Flexible : car les deux types de fichier peuvent être utilisé comme source de donnnées
    
Le client attend de recevoir des données encodées en JSON 

La liste des utilisateurs soit être formatée comme un tableau d'entité utilisateur et doit accepter un filtre     pour la fonction de recherche

Le single user service doit pouvoir retourner un seul utilisateur correspondant à l'identifiant placer en paramètre de la recherche.


config.php permet de configurer le chemin vers les sources des données(fichier csv et json).

Améliorations possible :
authentification
api key
autres ???

--------------------------------------------------------------------

Api testé avec Postman

Pour appeler l'api :

Avoir la liste de tous les utilisateurs/testtaker.
Get all users/testtakers.
Launch a get request to :
http://localhost/tao/v1/index.php


Obtenir les informations d'un seul utilisateur placé en paramètre de la requête.
Get only one user/testtaker corresponding to the parameter in the get request.
http://localhost/tao/v1/index.php?login=user'slogin

ex :
localhost/tao/v1/index.php?login=fosterabigail






