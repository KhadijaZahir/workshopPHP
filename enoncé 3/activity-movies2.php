<?php

$directorsLimit = $argv[1] ?? 5;

$moviesLimit = $argv[2] ?? 5;

$directors = [

"Steven Spielberg" => ["The Terminal", "Minority Report", "Catch Me If You Can", "Lincoln", "Bridge of Spies"],

"Christopher Nolan" => ["Dunkirk", "Interstellar", "The Dark Knight Rises", "Inception", "Memento"],

"Martin Scorsese" => ["Silence", "Hugo", "Shutter Island", "The Departed", "Gangs of New York"],

"Réalisateur 1" => ["Do the Right Thing", "Malcolm X", "Summer of Sam", "25th Hour", "Inside Man"],

                

"Lynne Ramsey" => ["Ratcatcher", "Swimmer", "Morvern Callar", "We Need To Talk About Kevin", "You Were Never Really Here"]

                          ];

$directorsCounter = 1;

foreach ($directors as $director => $movies) {

        if ($directorsCounter > $directorsLimit) {

                break;

}

        echo "$director's movies: \n";

        $moviesCounter = 1;

        foreach ($movies as $movie) {

                if ($moviesCounter > $moviesLimit) {

                        break;

                }

                echo " > $movie " . PHP_EOL; //(PHP_EOL and \n and <br/> have the same effect)
                // echo " >" .$movie. "\n" ; //(PHP_EOL and \n and <br/> have the same effect)

                $moviesCounter++;

        }

        $directorsCounter++;

}
?>

