<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Movie
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php 
$movies = [
    [
        'title' => "Avatar: La via dell'acqua",
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque deleniti assumenda, ea expedita explicabo porro rem illo adipisci similique debitis in beatae nesciunt natus quisquam. Nemo repellendus quas voluptatem.',
        'genres' => 'Fantascienza, azione, avventura',
        'vote' => '8',
    ],
    [
        'title' => "Coco",
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque deleniti assumenda, ea expedita explicabo porro rem illo adipisci similique debitis in beatae nesciunt natus quisquam. Nemo repellendus quas voluptatem.',
        'genres' => 'Animazione, commedia, fantastico',
        'vote' => '9',
    ],
    [
        'title' => "The emoji movie",
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque deleniti assumenda, ea expedita explicabo porro rem illo adipisci similique debitis in beatae nesciunt natus quisquam. Nemo repellendus quas voluptatem.',
        'genres' => 'Animazione, commedia, avventura',
        'vote' => '4',
    ],
];

class Movie{
    public $title;
    public $description;
    public $genres;
    public $vote;

    public function __construct($title, $description, $genres, $vote){
        $this->title = $title;
        $this->description = $description;
        $this->genres = $genres;
        $this->vote = $vote;
    }
};

$movie_objects = [];

foreach ($movies as $movie){
    $movie_object = new Movie($movie['title'], $movie['description'], $movie['genres'], $movie['vote']);
    $movie_objects[] = $movie_object;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicola Placentino">
    <title>Php oop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5">
        <h1>Elenco film</h1>
        <?php foreach ($movie_objects as $movie) : ?>
            <div class="mb-3">
                <h3><?= $movie->title ?></h3>
                <p><?= $movie->description ?></p>
                <span><?= $movie->genres ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>