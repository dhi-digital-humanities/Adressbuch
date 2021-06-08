Extraction des métadonnées des pages numérisées et redimensionnement
--------------------------------------------------------------------

**I) Extraction**

Nous avons souhaité extraire les métadonnées pour pouvoir effectuer le redimensionnement des pages numérisées et pouvoir proposer les metadonnées pour les internautes qui 
souhaitent les consulter. 
L'extraction s'est faite en ligne de commande avec file dans un script Bash. Le script était le suivant : for i in * .jpg; do file $i > $i.csv; done;.  
Dans cette commande, nous demandons que pour tous les fichier au format JPEG, nous souhations les métadonnées avec un format de sortie en CSV. 
Ce script en Bash a été effectuté sous Windows en activant la fonctionnalité 'Activer un sous-système Linux pour Windows' et en téléchargeant l'interprétateur de 
ligne de commande Ubuntu. Sans cette fonctionnalité, Windows ne prend pas en charge ce type de fonction. Jupyter Lab ne reconnaissait pas non plus la commande file. 
Les métadonnées sont disponible [ici](Adressbuch_metadata.csv) en csv.
