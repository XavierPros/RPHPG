Lors de votre premi�re utilisation de git pour le projet: 

-dans le git bash->git clone http://github.com/XavierPros/RPHPG.git
-dans le git bash->git config --global user.name "Prenom Nom"
-dans le git bash->git config --global user.mail "Mail"


Avant de commencer � travailler:

-dans le git bash->git pull						(t�l�charge les modifs ant�rieures)
-dans le git bash->git checkout "votre nom" 				(afin de travailler uniquement sur votre branche)


Une fois votre travail termin�:

-dans votre dossier local, clic-droit->Git add all files now		(pour ajouter au dossier vos modifs)
-dans le git bash->git status 						(tout doit bien �tre vert)
-dans le git bash->git commit -m "commentaire sur votre travail"	(ajout d'un commentaire sur vos modifs)
-dans le git bash->git checkout master					(pour repartir sur la branch principale)
-dans le git bash->git git merge "votre nom de branch"			(fusion des autres branch avec la v�tre)
-dans le git bash->git push -u origin master				(upload de vos modifs dans le dossier g�n�ral)