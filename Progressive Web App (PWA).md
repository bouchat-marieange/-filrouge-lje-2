# Progressive Web App (PWA)

Une PWA (Progressive Web App) est en fait un site web responsive qui une fois affiché sur un téléphone portable peut être enregistrer et consulté hors ligne.

Cette application se comporte comme un application native, elle est accessible via un icone présente sur l'écran d'acceuil du téléphone et propose un écran de démarrage.

Les PWA ont l'avantage d'être compatible toutes plateforme puisqu'elle sont dépendante d'un navigateur et non d'un système d'exploitation pour être ouverte.

Un PWA est composé de tous les fichiers traditionnels composant un site internet classique (html, css, javascript, json, ...) + un fichier manifest.json qui spécifie comment l'appli doit se comporter.

Les PWA dépendent d'un service workers pour fonctionner. Il s'agit d'une bibliothèque javascript. On peut utiliser Upup.js. (https://www.talater.com/upup/getting-started-with-offline-first.html).
Voir tutoriel et téléchargement pour obtenir le fichier "upup.min.js" et savoir comment intégrer les différentes balises script dans le fichier html principal (ex: index.html) juste avant la balise </body>

## Les étapes pour créer une PWA

Pour créer un progressive web app, il faut respecter une série d'étape obligatoire

* Créer son site (HTML, CSS, JavaScript, SASS, json, php, MySQL, ...) de manière responsive en commençant par la maquette mobile vers desktop (mobile first). On peut utiliser un framework de type bootstrap ou knacss pour faciliter la mise en place de l'aspect responsive (attention cependant à ne pas alourdir inutilement l'application qui doit être la plus lègère possible pour accélérer son affichage sur mobile) ou le gérer manuellement uniquement avec des medias queries.

* Le site web devra impérativement avoir un adresse HTTPS et pas HTTP. Le plus simple si on n'a pas de bases de données type PHP, MySQL et uniquement html,css, javavascript et json est d'utliser le service githubpage qui passe automatiquement le site en https. Dans le cas où le site nécessite une base de données, il n'est pas possible de l'héberger sur un github page qui ne prends pas en charge ce type de contenu. Il faudra alors trouver un hébergeur gratuit ou non et le paramètrer pour que l'adresse du site soit en https. (exemple gratuit prenant en charge DB : https://fr.000webhost.com/)

* Installer l'extension Lighthouse pour le navigateur Chrome afin de pouvoir étudier notre site et évaluer sa qualité selon 3 axes : Progressive, Performance, Accesibilité. Le plugin va scanner notre site, et fournir un rapport et une notation pour chacun des axes ainsi que les actions a effectuer pour améliorer ses scores et les amené tous à 100%.(https://developers.google.com/web/tools/lighthouse/)

* Il faudra une icone pour notre site, pour en trouver une on peu soit la créer soi-même sous forme vectorielle, soit en trouver une gratuitement qui correspond à ce que l'on cherche sur un site tel que : https://thenounproject.com/ . La résolution 400 x 400px est idéale. On peut personnalisé cette icone via un logiciel de dessin.Le fichier de favicon doit se placer à la racine du site. N'oubliez pas l'étape de compression du favicon pour en réduire au maximum la taille avant de générer le pack favicon avec realfavicongenerator.
Pour personnalisé vos icones préférez un fond transparent pour les formes découpées format PNG sinon utiliser le format JPEG plus léger.

* Il faudra générer un favicon pour notre site pour cela rendez-vous sur le site : https://realfavicongenerator.net/
Celui-ci va à partir de l'image fournie générer un fichier manifest.json ainsi que toutes les versions d'icones nécessaires pour la créataion de la PWA.

* On aura besoin d'un service worker du type upup.js (bibliothèque JavaScript) pour rendre la PWA opérationnelle. (https://www.talater.com/upup/getting-started-with-offline-first.html). Télécharger les fichiers nécessaires (voir bas de page) les intégrer dans le code de notre fichier html comme indiqué dans le tutorial.
Il faut placer le fichier du service worker à la racine du site et l'insérer dans une balise script en version minimisé juste avant la balise </body> de la page html (ex: <sript>upup.min.js<script>)

* Une fois le site hébergé sur notre serveur ou githubpage, le scanner avec l'extension Lighthouse du navigateur Chrome précédemment installée. A partir du rapport optenu améliorer les scores jusqu'à obtenir 100% partout en suivant les instructions données pour chaque problème relevé dans le rapport Lighthouse.

* Une fois le test Lighthouse réalisé et les modifications apportées pour optimisé les scores, tester le site sur votre téléphone mobile. Si tout se passe bien, Androïd devrait ouvrir une fenêtre pop-up vous invitant à sauvegarder le site sur votre écran d'acceuil. Accepter et tenter de lancer l'application à partir de l'icone sur votre écran d'acceuil en coupant toute connexion internet pour vérifier que tous les fichiers de votre site ont bien été téléchargés sur votre téléphone et sont consultables hors ligne.

* Voilà, vous venez de créer votre première progressive web app.


## Exemple de PWA

* https://plancomptablebelge.be/

* https://pwa.rocks/


## Astuces

* Redimmensionner les images et les optimisé systèmatiquement. (Photoshop save for web en jpg, n'utiliser le format PNG que si la transparence est nécessaire). Un astuce utiles pour les images abstraites et d'augmenter le flou (blur) cela permet d'augmenter la compression en évitant l'effet de pixelisation.

* Attention si vous utiliser githubpages pour héberger votre site, n'oubliez pas de commiter et pusher les changements effectuer au fur et à mesure avant de réaliser les tests lighthouse pour voir l'évolution des score

* Pour personnaliser vos images vectorielles gratuitement en ligne: https://vectr.com/new - Pour personnaliser vos images non vectorielles gratuitement en ligne: https://pixlr.com/editor/
