**************************************
*                                    *
*    TAO Pratical Exercise Client    *
*                                    *
*           Back-End Verion          *
*                                    *
**************************************

-----------------------------------------------------
Instruction concernant la conception de l'api rest  -
-----------------------------------------------------

Objectif :

Cr�er une api rest qui retourne la liste des utilisateurs contenu dans la source des donn�es(fichier CSV ou fichier JSON)



--------------------------
Sp�cification techniques -
--------------------------

Utilisation de m�thode GET

Flexible : car les deux types de fichier peuvent �tre utilis� comme source de donnn�es
    
Le client attend de recevoir des donn�es encod�es en JSON 

La liste des utilisateurs soit �tre format�e comme un tableau d'entit� utilisateur et doit accepter un filtre     pour la fonction de recherche

Le single user service doit pouvoir retourner un seul utilisateur correspondant � l'identifiant placer en param�tre de la recherche.


config.php permet de configurer le chemin vers les sources des donn�es(fichier csv et json).

Am�liorations possible :
authentification
api key
autres ???

--------------------------------------------------------------------

Api test� avec Postman

Pour appeler l'api :

Avoir la liste de tous les utilisateurs/testtaker.
Get all users/testtakers.
Launch a get request to :
http://localhost/tao/v1/index.php


Obtenir les informations d'un seul utilisateur plac� en param�tre de la requ�te.
Get only one user/testtaker corresponding to the parameter in the get request.
http://localhost/tao/v1/index.php?login=user'slogin

ex :
localhost/tao/v1/index.php?login=fosterabigail






