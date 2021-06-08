**Interconnexion entre le Framework Cakephp et la base de données SQL**
--------------------------------------------------------------------------

**I) le framework Cakephp**

La version de Cakephp pour l'application est [**Cakephp 4x Strawberry**](https://cakephp.org/).  
Cakephp est un outil pour créer des applications web qui suivent un modèle de conception MVC.  
Le M est le Model qui assure la connexion entre la base de données SQL et C le controller. Ce dernier envoie les informations au V pour View qui affiche l'interface que voit l'utilisateur lorsqu'il consulte la base de données.  
Une conception MVC permet une application web mieux organisée et des codes plus court. Chaque page dispose d'un index pour afficher une liste de données comme les 20 premières personnes d'Adressbuch, par exemple, et d'une view pour avoir des informations détaillées sur la personne en particulier.  
L'application web a été créé par une stagiaire allemande, Alina Ostrowski et Gérald Kembellec, chercheur détaché au [département des Humanités Numériques](https://www.dhi-paris.fr/fr/recherche/digital-humanities.html) à l'Institut Historique Allemand de Paris.  
Une carte permettant de voir où habitaient les allemands indépendant vivant à Paris sera disponible ainsi que des télechargements des données ou de la base entière en JSON, XML, SQL et CSV. 

**II) Paramétrage pour l'interconnexion**

Après avoir [intégré les données](Integration_des_donnees.md) dans la base SQL, il faut que la base soit connectée avec l'application Cakephp.  
Pour cela, nous allons modifier le fichier **app_Local.php** dans le dossier **config**. Nous allons rensieigner les informations permettant la connexion de la base de données, à savoir, **localhost**, **username**, **password** et **port**, uniquement si c'est un port spécifique. 
Une fois ce paramétrage effectuée, l'application devrait être connectée à la base de données. 

**III) Lancement**

Les premiers tests ont été effectués en local pour voir le fonctionnement de l'interface.  
Pour cela, nous avons besoin d'un serveur local SQL, ici nous en avons un avec l'application [MAMP](https://www.mamp.info/fr/mamp/windows/) et avec Cakephp, il faut activer le serveur local en ligne de commande.  
Il suffit d'exécuter **'chemin_vers_l'application/nom_application/bin/cake server'** en ligne de commande.  
Lors du lancement, une page ne fonctionnait pas à cause de la clause **ONLY_FULL_GROUP_BY** dans la variable **sqlmode** de phpMyAdmin, il suffit d'effacer la clause de la variable pour que la page fonctionne. 

* *pour plus d'informations à propos de [Cakephp 4x](https://book.cakephp.org/4/en/index.html)*.
* *voir [ici](Integration_des_donnees.md) l'étape précédente d'intégration des données*
*  *voir [ici](Numerisation.md) la suite du projet avec la numerisation de Adressbuch.*
