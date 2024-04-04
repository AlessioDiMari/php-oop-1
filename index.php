<?php


// creo una classe
class Movie {

    // creo delle variabili d'istanza
    public $title;
    public $year;
    public $director;
    public $genre;
    
    // definisco un construttore    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_year
     * @param  string $_director
     */
    function __construct($_title, $_year, $_director) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> director = $_director;

    }


    public function tenYears(){
        
    }

};

$movies = [
    new Movie("Kung Fu Panda 4", 2024, "Mike Mitchell"),
    new Movie("Bob Marley: One Love", 2024, "Reinaldo Marcus Green"),
    new Movie("The Beekeeper", 2024, "David Ayer"),
    new Movie("Spirit - Cavallo selvaggio", 2002, "Lorna Cook"),
    new Movie("Dragon Trainer", 2010, "Chris Sanders")
];

var_dump($movies)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">

    <h1>
        PHP OOP MOVIE

    </h1>

    </div>
    



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>