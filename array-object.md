# Array-Object

### Écrivez une fonction qui filtre un tableau d'objets selon une propriété et sa valeur

```php
// Cas d'usage : Filtrage des utilisateurs actifs dans une application
$users = [
    ["id" => 1, "name" => "Alice", "age" => 25, "active" => true],
    ["id" => 2, "name" => "Bob", "age" => 30, "active" => false],
    ["id" => 3, "name" => "Charlie", "age" => 35, "active" => true]
];
print_r(filterByProperty($users, 'active', true));
// [["id" => 1, "name" => "Alice", "age" => 25, "active" => true], ["id" => 3, "name" => "Charlie", "age" => 35, "active" => true]]
```


---

### Écrivez une fonction qui groupe les éléments d'un tableau selon une propriété

```php
// Cas d'usage : Regroupement de produits par catégorie dans un e-commerce
$products = [
    ["id" => 1, "name" => "Laptop", "category" => "Electronics", "price" => 999],
    ["id" => 2, "name" => "Smartphone", "category" => "Electronics", "price" => 699],
    ["id" => 3, "name" => "T-shirt", "category" => "Clothing", "price" => 29]
];
print_r(groupBy($products, 'category'));
// ["Electronics" => [...], "Clothing" => [...]]
```


---

### Écrivez une fonction qui trouve l'intersection entre deux tableaux d'objets selon une propriété donnée

```php
// Cas d'usage : Trouver les livres disponibles dans deux bibliothèques
$library1 = [
    ["id" => 1, "title" => "1984", "author" => "Orwell", "available" => true],
    ["id" => 2, "title" => "Dune", "author" => "Herbert", "available" => false]
];
$library2 = [
    ["id" => 3, "title" => "1984", "author" => "Orwell", "available" => true],
    ["id" => 4, "title" => "Foundation", "author" => "Asimov", "available" => true]
];
print_r(findIntersection($library1, $library2, 'title'));
// ["id" => 1, "title" => "1984", "author" => "Orwell", "available" => true]("id" => 1, "title" => "1984", "author" => "Orwell", "available" => true)
```


---

### Écrivez une fonction qui transforme un tableau d'objets en utilisant une fonction de mapping personnalisée

```php
// Cas d'usage : Création d'un rapport de salaires avec noms complets
$employees = [
    ["id" => 1, "firstName" => "John", "lastName" => "Doe", "salary" => 50000],
    ["id" => 2, "firstName" => "Jane", "lastName" => "Smith", "salary" => 60000]
];
$transformer = function($emp) {
    return [
        "id" => $emp["id"],
        "fullName" => $emp["firstName"] . " " . $emp["lastName"],
        "annualSalary" => $emp["salary"] * 12
    ];
};
print_r(transformArray($employees, $transformer));
// [["id" => 1, "fullName" => "John Doe", "annualSalary" => 600000], ...]
```


---

### Écrivez une fonction qui agrège les données d'un tableau d'objets

```php
// Cas d'usage : Calcul des totaux par catégorie de dépenses
$transactions = [
    ["id" => 1, "type" => "debit", "amount" => 100, "category" => "Food"],
    ["id" => 2, "type" => "debit", "amount" => 50, "category" => "Food"],
    ["id" => 3, "type" => "credit", "amount" => 75, "category" => "Income"]
];
print_r(aggregateData($transactions, 'category', 'amount'));
// ["Food" => 150, "Income" => 75]
```