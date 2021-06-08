Extraction des métadonnées et redimensionnement des pages numérisées
--------------------------------------------------------------------

**I) Extraction**

Nous avons souhaité extraire les métadonnées pour pouvoir effectuer le redimensionnement des pages numérisées et pouvoir proposer les metadonnées pour les internautes qui 
souhaitent les consulter. 
L'extraction s'est faite en ligne de commande avec file dans un script Bash. Le script était le suivant : for i in * .jpg; do file $i > $i.csv; done;.  
Dans cette commande, nous demandons que pour tous les fichier au format JPEG, nous souhations les métadonnées avec un format de sortie en CSV. 
Ce script en Bash a été effectuté sous Windows en activant la fonctionnalité 'Activer un sous-système Linux pour Windows' et en téléchargeant l'interprétateur de 
ligne de commande [Ubuntu](https://doc.ubuntu-fr.org/accueil). Sans cette fonctionnalité, Windows ne prend pas en charge ce type de fonction. Jupyter Lab ne reconnaissait pas non plus la commande file. 
Les métadonnées sont disponible [ici](/Tables_CSV_Adressbuch/Adressbuch_metadata.csv) en CSV.

**II) Redimensionnemnent**

Pour modifier la résolution et la taille des numerisations plusieurs logiciels étaient disponible mais cette partie s'est aussi effectuée en ligne de commande. GIMP est un bon logiciel qui propose de redimensionner les images mais seulement modifier la taille et non la résolution. Avec un corpus de 258 pages, nous ne pouvions pas le faire image par image comme le propose GIMP. Le [pacakage imagemagick](https://doc.ubuntu-fr.org/imagemagick) disponible avec Ubuntu permet le traitement d'images par lot pour la résolution et la taille des images. la commande qui suit permet de changer la résolution et les dimensions : mogrify -units pixelsperinch -density 72x72 -resize 800x1200 -path chemin_des_nouvelles_images. Dans cette commande, nous souhaitons que les images soient en 72dpi avec une taille de 800x1200 et qu'elles soient enregistrées dans un nouveau dossier. 

* *voir [ici](Numerisation.md) l'étape précédente de numérisation de Adressbuch*
