## A propos de l' API

Cet api permet de s'authetifier via JWT et d'accéder à plusieurs routes. On peut voir, créer, mettre à jour et supprimer des entités.

### Pré requis 
Postman
Composer v-2.0.9


## L'authetification via JWT
Nous pouvons nous connecter via l'authentification Json Web Token via l'authetification de 3 utilisateurs :

email: alexis.iim@admin.com
password : password
email: nicolas.iim@admin.com
password : password
email: karine.iim@admin.com
password : password
 
## Les routes

Pour utiliser les différentes routes, il faut utiliser le token récupérer et l'inséré dans "Authorization" et sélectionner le type "Bearer token" dans Postman. 

### routes accessibles

GET http://127.0.0.1:8000/api/{name}
GET http://127.0.0.1:8000/api/{name}/{id}
POST http://127.0.0.1:8000/api/{name}
PUT http://127.0.0.1:8000/api/{name}/{id}
DELETE http://127.0.0.1:8000/api/{name}/{id}

On peut remplacer {name} par :
- classes
- students
- participants
- subjects
- marks
