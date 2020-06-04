

<?php 

$realisateurs = [

        "realisateur1" => ["film1", "film2", "film3", "film4", "film5"],
        
        "realisateur2" => ["film1", "film2", "film3", "film4", "film5"],
        
        "realisateur3" => ["film1", "film2", "film3", "film4", "film5"],
        
        "realisateur4" => ["film1", "film2", "film3", "film4", "film5"],
        
        "realisateur5" => ["film1", "film2", "film3", "film4", "film5"]
        
];


function funcforrepeateArg ($x=5, $y=5){

    GLOBAL $realisateurs;  //  make var of table global

    $nbrRealisateurs = array_rand($realisateurs, $x); //pour determiner le nombre des realisateurs à afficher (note :array_rand() expects parameter 1 to be array)
    $nbrFilms = array_rand($nbrRealisateurs, $y);        // pour determiner le nombre de titre à afficher (note: Second argument has to be between 1 and the number of elements in the array)
    
        foreach($nbrRealisateurs as $cle => $value){
        echo "<b>les films de $value :</b> <br><br>";
    
        foreach ($nbrFilms as $key){
            echo $realisateurs[$value][$key] .'<br>';
    
        }
    
        echo '<br>';
        }

}funcforrepeateArg(4,2)

?>
