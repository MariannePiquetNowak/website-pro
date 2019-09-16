# website-pro

Petit site portfolio

# Déploiment du site web

Alors déjà, on achète un serveur sur OVH

Puis j'importe ma BDD

Je me connecte sur FileZilla au serveur

Puis BIM problème avec la BDD

Bon, je change mon wp-config.php en mettant les bonnes infos de ma BDD

Sauf que toujours la même erreur et I DON'T KNOW WHY WTF !

### SOLUCE

Okay, en fait il fallait mettre la BDD du serveur je suis un concombre.

### On revient sur le reste

Bon, jusque là, je vais la home de mon site, les font s'affiche chez Audie mais pas chez moi...

De plus, je n'ai pas accès aux autres pages ni à mon BO, toujours un problème de BDD

### Essai changement des privilèges

### Problème 1 => connecter la page au serveur

Bon on retourne sur ce bon vieux PMA pour changer les privilèges

J'essaie de mettre le libellé "Tout client" avec le nom d'hôte ftp.cluster020.hosting.ovh.net

Résultat du test => Okay, nickel, c'est ce qu'il faut faire.

Puis j'exporte la BDD pour la ré-importer sur mon serveur



### Problème 2 => accéder à toutes les pages

Alors oui, parce qu'il y a un p'tit soucis des familles. La home s'affiche bien MAIS si je vais dans la page ``Projets`` par exemple
celle-ci m'affiche la bonne URL mais petit soucis de serveur (la bonne erreur 500)

En cherchant sur internet, il peut s'agir de 2 erreurs :
<ol>
<li> le .htaccess qui n'est pas à jour </li>
<li> un problème de mémoire (MEMORY=64B) </li>
</ol>

Il s'aggissait finalement du .htaccess, en effet, mes redirection se faisaient sur le localhost
On refait un coup de permission 664 et le tour est joué !A

### Problème 3 => l'url de la page artbook

En effet, l'url de la page ``artbook`` passse par un slug ``marianne-piquet-nowak``, pas normal
Il est possible que ce soit dû à ma boucle où je n'ai pas préciser l'argument ``page-artbook`` dans ``<?php the_content() ?>

Mais finalement, après un repos bien mérité et un café, en me rendant sur le BO, je me suis rendu compte que j'avais mis une page parente
à la page Artbook, le parent étant... :drum: la Home ! Donc on enlève tout ça, la page fonctionne !

*Voilà les quelques problèmes rencontrés pour l'hébergement du site, ces notes me serviront au cas où cela se reproduit (et en espérant retenir les leçons)*