# Object 2

### # Écrivez une fonction qui récupère toutes les valeurs d'un objet

```php
// Cas d'usage : Récupération des scores d'un joueur
$scores = [
    "level1" => 100,
    "level2" => 85,
    "level3" => 95
];
print_r(getValues($scores)); // [100, 85, 95]
```


---

### # Écrivez une fonction qui transforme les valeurs d'un objet

```php
// Cas d'usage : Conversion de prix en euros vers dollars
$pricesInEuros = [
    "book" => 20,
    "pen" => 5,
    "notebook" => 10
];
$toDollars = function($euros) { return $euros * 1.1; };
print_r(transformValues($pricesInEuros, $toDollars));
// ["book" => 22, "pen" => 5.5, "notebook" => 11]
```


---

### # Écrivez une fonction qui fusionne deux objets en sommant les valeurs numériques communes

```php
// Cas d'usage : Fusion des ventes mensuelles de deux magasins
$store1Sales = [
    "january" => 1000,
    "february" => 1200,
    "march" => 900
];
$store2Sales = [
    "january" => 800,
    "february" => 950,
    "march" => 1100
];
print_r(mergeObjects($store1Sales, $store2Sales));
// ["january" => 1800, "february" => 2150, "march" => 2000]
```


---

### # Écrivez une fonction qui filtre un objet selon une condition sur les valeurs

```php
// Cas d'usage : Filtrage des produits en rupture de stock
$inventory = [
    "laptop" => 0,
    "smartphone" => 5,
    "tablet" => 0,
    "headphones" => 8
];
print_r(filterObject($inventory, function($stock) { return $stock === 0; }));
// ["laptop" => 0, "tablet" => 0]
```


---

### # Écrivez une fonction qui convertit un objet plat en objet imbriqué en utilisant les points comme séparateurs

```php
// Cas d'usage : Configuration d'une application
$flatConfig = [
    'app.name' => 'MyApp',
    'app.version' => '1.0.0',
    'database.host' => 'localhost',
    'database.port' => 5432
];
print_r(flatToNested($flatConfig));
// [
//     'app' => ['name' => 'MyApp', 'version' => '1.0.0'],
//     'database' => ['host' => 'localhost', 'port' => 5432]
// ]
```


---

### # Écrivez une fonction qui trouve les clés d'un objet ayant une valeur spécifique

```php
// Cas d'usage : Recherche des produits en rupture de stock
$productStock = [
    "laptop" => 0,
    "mouse" => 5,
    "keyboard" => 0,
    "monitor" => 3
];
print_r(findKeysByValue($productStock, 0));
// ["laptop", "keyboard"]
```


---

### # Écrivez une fonction qui crée un objet à partir de deux tableaux

```php
// Cas d'usage : Création d'un objet de scores à partir de noms de joueurs et leurs points
$playerNames = ["Alice", "Bob", "Charlie"];
$scores = [100, 85, 90];
print_r(createObjectFromArrays($playerNames, $scores));
// ["Alice" => 100, "Bob" => 85, "Charlie" => 90]
```


---

### # Écrivez une fonction qui compte les occurrences de valeurs dans un objet

```php
// Cas d'usage : Analyse des statuts de commandes
$orderStatuses = [
    "order1" => "pending",
    "order2" => "delivered",
    "order3" => "pending",
    "order4" => "cancelled",
    "order5" => "pending"
];
print_r(countValues($orderStatuses));
// ["pending" => 3, "delivered" => 1, "cancelled" => 1]
```


---

### # Écrivez une fonction qui extrait certaines propriétés d'un objet

```php
// Cas d'usage : Extraction des informations publiques d'un profil
$userProfile = [
    "name" => "Jean Martin",
    "email" => "jean@email.com",
    "password" => "secret123",
    "age" => 35,
    "address" => "123 rue Principal"
];
$publicInfo = ["name", "age"];
print_r(extractProperties($userProfile, $publicInfo));
// ["name" => "Jean Martin", "age" => 35]
```


---

### # Écrivez une fonction qui trie les propriétés d'un objet par valeur

```php
// Cas d'usage : Tri des scores de joueurs
$playerScores = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 95
];
print_r(sortObjectByValue($playerScores));
// ["Charlie" => 78, "Alice" => 85, "Bob" => 92, "David" => 95]
```


---

### # Écrivez une fonction qui trouve la valeur maximale dans un objet de nombres

```php
// Cas d'usage : Recherche du meilleur score dans un jeu
$gameScores = [
    "level1" => 850,
    "level2" => 920,
    "level3" => 880,
    "level4" => 1020
];
echo findMaxValue($gameScores); // 1020
```


---

### # Écrivez une fonction qui créé un objet à partir d'un tableau de paires clé-valeur

```php
// Cas d'usage : Création d'un catalogue de produits
$productPairs = [
    ["pommes", 2.5],
    ["bananes", 1.8],
    ["oranges", 2.2]
];
print_r(createObjectFromPairs($productPairs));
// ["pommes" => 2.5, "bananes" => 1.8, "oranges" => 2.2]
```


---

### # Écrivez une fonction qui recherche une valeur dans un objet imbriqué

```php
// Cas d'usage : Recherche dans une structure de données de configuration
$config = [
    "app" => [
        "name" => "MonApp",
        "settings" => [
            "theme" => "dark",
            "notifications" => [
                "email" => true,
                "push" => false
            ]
        ]
    ]
];
print_r(findValueInObject($config, "dark")); // ["app", "settings", "theme"]
```


---

### # Écrivez une fonction qui groupe les objets par une propriété spécifique

```php
// Cas d'usage : Groupement d'étudiants par niveau
$students = [
    ["name" => "Alice", "level" => "Débutant"],
    ["name" => "Bob", "level" => "Intermédiaire"],
    ["name" => "Charlie", "level" => "Débutant"],
    ["name" => "David", "level" => "Avancé"]
];
print_r(groupByProperty($students, "level"));
// [
//   "Débutant" => [
//     ["name" => "Alice", "level" => "Débutant"],
//     ["name" => "Charlie", "level" => "Débutant"]
//   ],
//   "Intermédiaire" => ["name" => "Bob", "level" => "Intermédiaire"]("name" => "Bob", "level" => "Intermédiaire"),
//   "Avancé" => ["name" => "David", "level" => "Avancé"]("name" => "David", "level" => "Avancé")
// ]
```


---

### # Écrivez une fonction qui vérifie si un objet correspond à un schéma spécifique

```php
// Cas d'usage : Validation d'un formulaire utilisateur
$userSchema = [
    "name" => "string",
    "age" => "number",
    "email" => "string"
];
$userInput = [
    "name" => "Marie",
    "age" => 25,
    "email" => "marie@email.com"
];
var_dump(validateObject($userInput, $userSchema)); // true
```


---

### # Écrivez une fonction qui compare les modifications entre deux objets

```php
// Cas d'usage : Suivi des modifications d'un profil utilisateur
$oldProfile = [
    "name" => "Jean Dupont",
    "email" => "jean@email.com",
    "age" => 30
];
$newProfile = [
    "name" => "Jean Dupont",
    "email" => "jean.dupont@email.com",
    "age" => 31,
    "phone" => "0123456789"
];
print_r(compareDifferences($oldProfile, $newProfile));
// [
//     "email" => ["type" => "modified", "old" => "jean@email.com", "new" => "jean.dupont@email.com"],
//     "age" => ["type" => "modified", "old" => 30, "new" => 31],
//     "phone" => ["type" => "added", "new" => "0123456789"]
// ]
```


---

### # Écrivez une fonction qui convertit un objet en chaîne de paramètres d'URL

```php
// Cas d'usage : Construction d'une URL de recherche
$searchParams = [
    "query" => "ordinateur portable",
    "maxPrice" => 1000,
    "brand" => "Dell",
    "inStock" => true
];
echo objectToUrlParams($searchParams);
// query=ordinateur%20portable&maxPrice=1000&brand=Dell&inStock=1
```


---

### # Écrivez une fonction qui génère un résumé statistique d'un objet contenant des nombres

```php
// Cas d'usage : Analyse des ventes mensuelles
$monthlyRevenues = [
    "january" => 1000,
    "february" => 1200,
    "march" => 900,
    "april" => 1500
];
print_r(getObjectStats($monthlyRevenues));
/*
[
    "basic" => [
        "min" => 900,
        "max" => 1500,
        "average" => 1150,
        "total" => 4600
    ],
    "advanced" => [
        "median" => 1100,
        "variance" => 52500,
        "standardDeviation" => 229.13
    ]
]
*/
```