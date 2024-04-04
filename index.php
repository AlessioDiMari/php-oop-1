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

    
    /**
     * tenYears se il film è uscito da più di 10 anni ritorna: "Questo film è uscito da parecchi anni"
     * se è uscito da meno di 10 ma più di 0 ritorna : "Questo film è uscito da pochi anni"
     * se è uscito lo stesso anno ritorna: "Questo film è uscito quest'anno"
     * altrimenti ritorna : "L'anno di uscita inserito non è corretto"
     *
     * @return void
     */
    public function tenYears(){
        $currentYear = date("Y");
        $yearsPassed = $currentYear - $this->year;
        if($yearsPassed >= 10){
            return "Questo film è uscito da parecchi anni";
        } elseif ($yearsPassed > 0 && $yearsPassed < 10){
            return "Questo film è uscito da pochi anni";
        } elseif ($yearsPassed == 0){
            return "Questo film è uscito quest'anno";
        } else {
            return "L'anno di uscita inserito non è corretto";
        }
    }

};

$movies = [
    new Movie("Kung Fu Panda 4", 2024, "Mike Mitchell"),
    new Movie("Bob Marley: One Love", 2024, "Reinaldo Marcus Green"),
    new Movie("The Beekeeper", 2024, "David Ayer"),
    new Movie("Spirit - Cavallo selvaggio", 2002, "Lorna Cook"),
    new Movie("Dragon Trainer", 2010, "Chris Sanders"),
    new Movie("Dragon Trainer - Il mondo nascosto", 2019, "Dean DeBlois")
];

// var_dump($movies);
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

        <div class="row row-cols-auto">
            <?php
            
            foreach($movies as $movie){
                ?>
                <div class="col d-flex justify-content-center p-3 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $movie->title ?> </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"> <?= $movie->year ?> </h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary"> <?= $movie->director ?> </h6>
                            <p class="card-text"> <?= $movie->tenYears() ?> </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
    



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>