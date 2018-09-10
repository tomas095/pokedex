<!DOCTYPE HTML>
<html lang="es"> 
    <head>
        <title>Pokedex</title>
        <meta charset="utf-8"/>
        <link href="custom.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="pokehead"> <!--Buscador de pokemons-->
            <div class="titulo"><h2>Pokedex</h2></div>
            <div class="buscar"> 	
                        <form method="POST" action="pokedexf.php" >
                        <input class="buscado" type="text" name="whoisthatpokemon" autofocus>
                        </form>
            </div>
        </div>
        
        <div id="pokedex">
            <?php
                $pokemons = Array("Charmander" =>['tipo' => 'Fuego',
                                                'tipoimg' => "<img class='imgtipo' src='https://vignette.wikia.nocookie.net/es.pokemon/images/c/ce/Tipo_fuego.gif/revision/latest?cb=20170114100331s'/>",
                                                
                                                'genero' => 'Masculino',
                                                'gnrimg' => "<img class='imgsex' src='https://png.icons8.com/metro/1600/male.png'/>",
                                  
                                                'ataque' => 'Mar Llamas',
                                  
                                                'fotopoke' => "<img class='imgpokegrande' src='https://vignette.wikia.nocookie.net/es.pokemon/images/b/be/Charmander_%28anime_SO%29.png/revision/latest?cb=20120906002506'>"],
                                  
                                  "Pikachu" =>['tipo' => 'Electrico',
                                               'tipoimg' => "<img class='imgtipo' src='https://vignette.wikia.nocookie.net/es.pokemon/images/1/1b/Tipo_el%C3%A9ctrico.gif/revision/latest?cb=20170114100155'>",
                                                
                                               'genero' => 'Femenino',
                                               'gnrimg' => "<img class='imgsex' src='http://downloadicons.net/sites/default/files/woman-sex-symbol-icon-63284.png'>",
                                               
                                               'ataque' => 'ImpacTrueno',
                                               
                                               'fotopoke' => "<img class='imgpokegrande' src='https://vignette.wikia.nocookie.net/new-fantendo/images/7/77/Pikachu.png/revision/latest?cb=20141022175016&path-prefix=es'>"],
                                  
                                  "Bulbasaur"=>['tipo' => 'Planta',
                                                'tipoimg' => "<img class='imgtipo' src='https://vignette.wikia.nocookie.net/es.pokemon/images/d/d6/Tipo_planta.gif/revision/latest?cb=20170114100444'>",

                                                'genero' => 'Masculino',
                                                'gnrimg' => "<img class='imgsex' src='https://png.icons8.com/metro/1600/male.png'>",

                                                'ataque' => 'Látigo Cepa',


                                                'fotopoke' => "<img class='imgpokegrande' src='https://vignette.wikia.nocookie.net/pokemon-planet/images/5/5b/Bulbasaur_by_elfaceitoso.png/revision/latest?cb=20161115042430'>"]);
            
            ksort($pokemons); //Ordenar
            
            if (isset($_POST["whoisthatpokemon"])){ //isset => ver que el valor no sea NULL
                
                $buscado= $_POST["whoisthatpokemon"];
                $buscado= strtolower($buscado); // strtolower => todo a minuscula
                $buscado= ucfirst($buscado); // ucfirst => primera a mayuscula
                $encontrado = 0;
                
                foreach($pokemons as $pokenombre => $pokemon){
                    if($pokenombre == $buscado){
                        echo 
                                                       
                            "<div class='pokeok'>".
                                "<div class='nombreok'>".$pokenombre."</div>".
                            "</div>".
                            
                            "<div class='pokeok'>".
                                "<div class='pokecarac'>".$pokemon["tipo"]."</div>".
                                "<div class='imgpokeok'>".$pokemon["tipoimg"]."</div>".
                            "</div>".

                            "<div class='pokeok'>".
                                "<div class='pokecarac'>".$pokemon["genero"]."</div>".
                                "<div class='imgpokeok'>".$pokemon["gnrimg"]."</div>".
                            "</div>".

                            "<div class='pokeok'>".
                                "<div class='pokecarac'>".$pokemon["ataque"]."</div>".
                            "</div>".

                            "<div class='pokeok'>".
                                "<div class='pokefotook'>".$pokemon["fotopoke"]."</div>".
                            "</div>";
                            $encontrado++;
                    }
                }
                if ($encontrado == 0){
                    Todos ($pokemons);
                }
            }

            Function Todos ($pokemons){
                foreach ($pokemons as $pokenombre => $pokemon) 
                    {	
                        echo
                            "<div class='poketodos'>".
                            "<div class='nombrepoketodos'>".$pokenombre."</div>".
                            "<div class='imgpoketodos'>".$pokemon["fotopoke"]."</div>".
                            "</div>";
                    }
            }
            ?>
        </div>
    </body>
</html>