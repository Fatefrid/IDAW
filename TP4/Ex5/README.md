# API Gestion utilisateurs

## GET

### GET /users.php
Retourne au format JSON la liste de tout les utilisateurs

### GET /users.php/{id}
Retourne au format JSON l'utilisateur avec l'id spécifié


## POST

### POST /users.php
Prend en paramètre un utilisateur au format JSON et l'ajoute à la liste existante


## PUT

### PUT /users.php/{id}
Prend en paramètre un utilisateur au format JSON et remplace l'utilisateur déjà existant à l'id spécifié avec le nouvel utilisateur


## DELETE

### DELETE /users.php/{id}
Supprime de la liste des utilisateurs l'utilisateur avec l'id spécifié