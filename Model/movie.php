

<!-- definire classe movie -->

<?php



class Movie
{
    // dichiarati elementi della classe Movie
    public $id;
    public $original_title;
    public $title;
    public $poster_path;

// costrutto

 function __construct($id, $original_title, $title, $poster_path)
{
    $this->id = $id;
    $this->original_title = $original_title;
    $this->title = $title;
    $this->poster_path = $poster_path;
}
function printCard(){
    $image = $this->poster_path;
    $title = $this->title;
    $original_title = $this->original_title;
    include __DIR__ ."/../View/card.php";
    
}

function printFlag(){
    
}
}


$movieList = file_get_contents(__DIR__ ."/movie_db.json");
$movieEl = json_decode($movieList, true);
$movies =[];
foreach ($movieEl as $el)
{
$movies [] = new Movie($el["id"], $el["original_title"], $el["title"], $el["poster_path"]) ;
}


// var_dump($movies);

?>