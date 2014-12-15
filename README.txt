Lors de votre première utilisation de git pour le projet: 

-dans le git bash->git clone http://github.com/XavierPros/RPHPG.git
-dans le git bash->git config --global user.name "Prenom Nom"
-dans le git bash->git config --global user.mail "Mail"


Avant de commencer à travailler:

-dans le git bash->git pull						(télécharge les modifs antérieures)
-dans le git bash->git checkout "votre nom" 				(afin de travailler uniquement sur votre branche)


Une fois votre travail terminé:

-dans votre dossier local, clic-droit->Git add all files now		(pour ajouter au dossier vos modifs)
-dans le git bash->git status 						(tout doit bien être vert)
-dans le git bash->git commit -m "commentaire sur votre travail"	(ajout d'un commentaire sur vos modifs)
-dans le git bash->git checkout master					(pour repartir sur la branch principale)
-dans le git bash->git git merge "votre nom de branch"			(fusion des autres branch avec la vôtre)
-dans le git bash->git push -u origin master				(upload de vos modifs dans le dossier général)