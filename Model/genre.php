

<?php

// class Genre
// {

// public $name;



// public function __construct($name){
//     $this->name = $name;
// }
// }
$genreList = file_get_contents(__DIR__ ."/genre_db.json");
var_dump($genreList);
// $genreEl = json_decode($genreList, true);

// $genres =[];
// foreach ($genreEl as $item){
//     $genres[] = new Genre($item["name"]);
// }


?>