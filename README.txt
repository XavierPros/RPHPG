La premi�re �tape va �tre de copier le contenu du projet de git sur le PC en local.
Tout d'abord, ouvrir une fen�tre de Git Bash ,on peut rester dans r�pertoire courant.
Taper : 

git clone https://github.com/XavierPros/RPHPG.git (enlever le "s" de "https" si erreur)

A partir de l�, on disposera du contenu une adresse du genre : C:\Users\charl_000\RPHPG
En second, on va configurer le git de fa�on � pouvoir inclure le nom, prenom et mail des
personnes committant :

git config --global user.name "Pr�nom Nom"

git config --global user.email "Mail"

git status permet de v�rifier l'�tat des fichiers dans le r�pertoire git
git add "Nom du fichier" permet de suivre un fichier pour le committer par le suite
git commit -m "Commentaire sur les modifications" permet de committer (taper -am au lieu de -m
si tu as l'erreur "no changes added to commit")
git diff permet de checker les modifications faites avant de commit
git log permet de regarder l'historique des commit