**Intégration des données dans la base SQL**
-------------------------------------------

**I) Création des difféentes tables de données**

Une base de données SQL avait été créée avec l'aide de l'outil de conceptualisation [Mocodo](http://www.mocodo.net/).  
Une fois que notre fichier de données était [nettoyée avec Open Refine](Nettoyage_Open_Refine.md), il fallait le fragmenter pour créer les tables pour la base de données SQL. 
Pour cela, on choisit **export tabulaire personnalisé** sur Open Refine qui permet de choisir le format et les colonnes que l'on souhaite exporter. 
Il fallait également créer de nouvelles colonnes, notamment des identifiants qui permettent de créer des jointures entre les tables courantes. 
Les tables associatives ont également été créées. 

**II) Export SQL des différentes tables**

Pour que nous puissions intégrer les tables courantes et associatives dans la base de données, nous les convertissons au format SQL. 
Avec un Open Refine, l'opération est simple, on choisit **export SQL**, nous pouvons ensuite choisir les différentes options comme l'intégration du schéma ou la valeur des différentes colonnes. 
Le schéma n'était pas nécessaire car les tables étaient créées dans la base de données, nous avions juste besoin de la fonction **INSERT INTO ('nom de la colonne')**. 

**III) Intégration des données**

La prochaine étape consiste à importer les fichier SQL que nous avions créé dans notre base de données, elle est gérée par [phpMyAdmin](https://www.phpmyadmin.net/). 
Pour éviter la moindre perte dans notre travail, nous avions effectué une sauvegarde de la base pour pouvoir la recréer si un problème survenait.   
Pour éviter des erreurs lors de l'intégration des données, nous importons d'abord les tables courantes qui continnent les données puis les tables associatives qui assurent les jointures entre les tables courantes. 
Nous déselectionnons **verification des clés étrangères** car ces dernières sont déjà créées.  
Lorsque que nous intégrons les données avec la vérification activée, nous avons une erreur à cause d'une contrainte de clé étrangère.
Les tables ont été importées avec succès, nous devions vérifier que les jointures étaient bien effectuées en effectuant des requêtes SQL impliquant différentes tables. 

 * *voir [ici](Nettoyage_Open_Refine.md) l'étape précédente sur le nettoyage des données avec Open Refine.*
 * *les tables SQl de Adressbuch sont disponibles [ici](Tables_SQL)*
 * *voir [ici](Interconnexion_Cakephp_BaseSQL.md) la suite du projet avec l'interconnexion entre Cakephp et la base SQL*

