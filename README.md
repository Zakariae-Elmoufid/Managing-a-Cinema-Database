Documentation : Concepts de Programmation Orientée Objet (POO)

1. Classe

Une classe est comme un plan ou un modèle. Elle définit les propriétés (attributs) et les comportements (méthodes) d'un type d'objet.

Une classe n'occupe pas d'espace mémoire tant qu'elle n'est pas utilisée pour créer un objet.

2. Objet

Un objet est une instance d'une classe. Il est créé à partir d'une classe et possède des valeurs spécifiques pour ses attributs.

3. $this

Le mot-clé $this est utilisé dans les classes pour faire référence à l'instance courante de l'objet.

Il permet d'accéder aux propriétés et méthodes de l'objet en cours à partir de l'intérieur de la classe elle-même.

Exemple :

class Exemple {
    private \$nom;

    public function setNom(\$nom) {
        \$this->nom = \$nom;
    }

    public function getNom() {
        return \$this->nom;
    }
}

4. Constructeur

Un constructeur est une méthode spéciale appelée automatiquement lorsqu’un objet est créé à partir d’une classe.

Il sert à initialiser les attributs de l’objet ou à exécuter une configuration nécessaire.

Exemple :

class Exemple {
    private \$nom;

    public function __construct(\$nom) {
        \$this->nom = \$nom;
    }
}

5. Destructeur

Un destructeur permet de libérer automatiquement des ressources quand l’objet n’est plus utilisé.

Exemple :

class Exemple {
    public function __destruct() {
        echo "L'objet a été détruit.";
    }
}

6. Classe Abstraite

Une classe abstraite définit des propriétés et des méthodes communes qui seront partagées par toutes les sous-classes.

Elle crée une structure de base que toutes les classes dérivées doivent suivre.

Une classe abstraite ne peut pas être instanciée directement.

Les méthodes abstraites sont déclarées mais non définies dans la classe de base. Les sous-classes doivent obligatoirement implémenter ces méthodes.

Exemple :

abstract class Forme {
    abstract public function aire();
}

class Rectangle extends Forme {
    private \$largeur;
    private \$hauteur;

    public function __construct(\$largeur, \$hauteur) {
        \$this->largeur = \$largeur;
        \$this->hauteur = \$hauteur;
    }

    public function aire() {
        return \$this->largeur * \$this->hauteur;
    }
}

7. Getters et Setters

Les getters et setters sont des méthodes utilisées pour accéder et modifier les propriétés privées ou protégées d'une classe.

Getter

Méthode utilisée pour obtenir la valeur d'une propriété privée ou protégée.

Exemple : Lire une propriété avec \$objet->getNom().

Setter

Méthode utilisée pour modifier la valeur d'une propriété privée ou protégée.

Exemple : Modifier une propriété avec \$objet->setNom("Zakaria").

Pourquoi les utiliser ?

Encapsulation : Les propriétés sont privées/protégées pour empêcher un accès direct. Les getters et setters permettent un accès contrôlé.

Validation : Les setters valident les données avant de les attribuer à une propriété.

Flexibilité : Ajouter une logique supplémentaire sans modifier directement les propriétés.

Maintenabilité : Si la gestion des propriétés change, il suffit de modifier les getters et setters.

Exemple :

class Personne {
    private \$nom;

    public function getNom() {
        return \$this->nom;
    }

    public function setNom(\$nom) {
        if (strlen(\$nom) > 0) {
            \$this->nom = \$nom;
        }
    }
}

Ce document résume les concepts fondamentaux de la Programmation Orientée Objet en PHP avec des exemples pratiques pour une meilleure compréhension.

