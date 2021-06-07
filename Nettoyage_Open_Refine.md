
**Nettoyage et enrichissement des données sur Open Refine**
--------------------------



**I) Tranformations courantes** 

Ces transformations sont déjà proposées sur le logiciel dans >**editer les cellules** puis >**tranformations courantes**.   
Elles consistent notamment a supprimer les espaces en début et fin des données, supprimer les espaces consécutifs ou encore mettre les données en initale majuscule.  

**II) Facette/Filtre**  

La prochaine étape était de supprimer les orhtographes différentes pour normaliser les données.  
Prenons pour exemple les données "rue du havre" et "Rue Du Havre". Elles veulent dire la même chose mais elles ne sont pas écrites pareilles ce qui peut poser problèmes pour une personne qui cherche toutes les personnes habitant
"rue du havre", il n´aurait pas, à ce moment, toutes les personnes car les personnes habitant "Rue Du Havre" ne seraient pas dans les résultats.  
Pour y remédier, on se dirige vers >**facette** puis >**facette textuelle** et enfin >**groupe** dans la colonne **facette/filtre** qui se trouve à droite de nos données.
On peut regrouper les données qui ont une orthographe similaire et qui semblent avoir la même signification.  
**Facette** peut **filtrer le texte** pour isoler une ou plusieurs lignes et pour travailler uniquement sur les lignes choisies.  
On peut **trier** pour avoir les chiffres en ordre croissant ou les adresses dans l´ordre alphabétique.  
Certains changements qui nous plaisaient pas ont pu être défaits avec la fonction **Defaire/Refaire** (à côté de Facette/Filtre) ce qui s´avère très pratique pour revenir avant les modifications.  

**III) Reconcilier**

C´est l´étape essentielle pour enrichir les données. Nous allons nous servir d´une base de données externe à Open Refine pour **enrichir nos données**. 
La base de données par défault est **Wikidata** en anglais, la langue peut être modifiée en modifiant l´url de réconciliation. Grâce à la [liste de service de réconciliation](https://reconciliation-api.github.io/testbench/), nous pouvons ajouter des serveurs d'autorité comme **GND**, **VIAF**, **Geonames** ou d´autres sources de données externe.  
Pour effectuer la réconcilation, on se dirige vers >**reconciliation** puis >**demarrer la reconciliation**. Une fenêtre s´ouvre qui nous permet de choisir la base de données avec laquelle nous effectuons la réconciliation des données.
On a plus qu´a démarrer la réconciliation.  
Certaines données vont correspondre automatiquement, d´autres devront être réconciliés par nous-mêmes et enfin les dernières peuvent être inconnues pour la base de données.  
Nos données sont associées à une base de données externe ce qui nous permet d'ajouter des colonnes à partir de ces données réconciliées. Depuis **editer une colonne** > **ajouter une colonne à partir des valeurs réconciliées**, nous pouvons obtenir d'autres données dans la source externe comme les coordonnées GPS dans notre cas mais aussi des identifiants pour des personnes par la VIAF ou la GND par exemple.

* *Pour plus d'informations vous pouvez vous référer à la [documentation d'Open Refine](https://docs.openrefine.org/).*

* *voir [ici](Integration_des_donnees.md) la suite du projet avec l'intégration des données dans la base SQL.*
