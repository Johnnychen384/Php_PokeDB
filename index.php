<?php
  session_start();
?>



<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="style.js" src="assets/js/style.js">
    <script src="assets/js/ajax.js"></script>
    <style>
      * {
        max-width: 1442px;
        max-height: 1300px;
        margin: 0px;
        padding: 0px;
        color: white;
      }


      .bg-container {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-image: url("assets/img/bg-white_fog.jpeg");
        opacity: 1;
        overflow: scroll;
        animation-name: animatedBg;
        animation-duration: 15000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
      }

      @keyframes animatedBg {
       0% {background-image: url("assets/img/bg-white_fog.jpeg");}
       50% {background-image: url("assets/img/white-fog-bg3.jpeg");}
       100% {background-image: url("assets/img/bg-white_fog.jpeg");}
      } 




      /* title section */
      .pokedex-head {
        position: relative;
        width: 100%;
        padding-top: 10px;
        padding-bottom: 70px;
      }

      .pokedex-head h1 {
        color: white;
        text-align: center;
      }


      /* Fliters */
      .search-section {
        display:flex;
        padding: 0px 0px 30px 0px;
      }

      #submit {
        color: white;
        background-color: grey;
        border-radius: 5px;
        border: none;
        margin: 0 0 0 2px;
        padding: 2px 10px;
      
      }
  
      .dropdown {
        margin: 0px 5px;
      }


      .form-check-label{
        color: black;
      }


      #search {
        padding: 2px 0 2px 0;
        color: black;
      }


      /* hero */
      .flex-container{
        display: flex;
        max-height: 580px;
      }

      .carousel-container {
        width: 33.3333%;
        height: 580px;
      }

      .hero-results-container{
        width: 66.666667%;
        height: 580px;
      }


      /* carousel */
      .carousel-container{
        display: block;
        overflow: scroll;
      }
      
      .carousel-less-than-main{
        display: flex;
        background: linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0));
        border-radius: 40px 0px 0px 40px;
        width: 320px;
        transition: background 2s
      }
      
      .carousel-less-than-main:hover{
        background: rgba(255,255,255,.3)
      }


      .sprite-container{
        width: 100px;
        padding: 20px;
        /* display: inline; */
      }


      .pokemon-name{
        align-self: center;
        width: 125px;
        padding: 9px 0px 10px 10px;
        margin: 20px 0px 20px 0px;
        /* display: inline; */
      }

      .pokemon-type-car {
        position: absolute;
        align-self: center;
        margin: 0px;
        left: 100px;
        display: none;
      }

      /* .carousel-main{
        display: flex;
      }

      .carousel-more-than-main{
        display: flex;
      }

      .carousel-more-than-main-2{
        display: flex;
      }

      .carousel-more-than-main-3{
        display: flex;
      }

      .carousel-more-than-main-4{
        display: flex;
      }

      .carousel-more-than-main-5{
        display: flex;
      } */
      

      .pokemon-pic {
        position: absolute;
        max-width: 350px;
        left: 60%;
      }


      .pokemon-picture-container{
      
      }
      
      .hp-container{
        display: flex;
      }








    </style>  
  </head>
  <body>

  


      <div class="bg-container">
        <!-- head -->
        <div class="pokedex-head" id="pokedex-head">
          <h1 id="pokedex-title">Pokedex</h1>
        </div>

        <!-- search/fliters -->
        <div class="search-section">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              filters
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Fire" name="fire" id="fire">
                  <label class="form-check-label" for="flexCheckDefault">
                    Fire
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Water" name="Water" id="Water">
                  <label class="form-check-label" for="flexCheckDefault">
                    Water
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Grass" name="grass" id="Grass">
                  <label class="form-check-label" for="Grass">
                    Grass
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Normal" name="Normal" id="Normal">
                  <label class="form-check-label" for="Normal">
                    Normal
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Electric" name="Electric" id="Electric">
                  <label class="form-check-label" for="Electric">
                    Electric
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Ice" name="Ice" id="Ice">
                  <label class="form-check-label" for="flexCheckDefault">
                    Ice
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Fighting" name="Fighting" id="Fighting">
                  <label class="form-check-label" for="flexCheckDefault">
                    Fighting
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Poison" name="Poison" id="Poison">
                  <label class="form-check-label" for="flexCheckDefault">
                    Poison
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Ground" name="Ground" id="Ground">
                  <label class="form-check-label" for="flexCheckDefault">
                    Ground
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Flying" name="Flying" id="Flying">
                  <label class="form-check-label" for="flexCheckDefault">
                    Flying
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Psychic" name="Psychic" id="Psychic">
                  <label class="form-check-label" for="flexCheckDefault">
                    Psychic
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Bug" name="Bug" id="Bug">
                  <label class="form-check-label" for="flexCheckDefault">
                    Bug
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Rock" name="Rock" id="Rock">
                  <label class="form-check-label" for="flexCheckDefault">
                    Rock
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Ghost" name="Ghost" id="Ghost">
                  <label class="form-check-label" for="flexCheckDefault">
                    Ghost
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Dark" name="Dark" id="Dark">
                  <label class="form-check-label" for="flexCheckDefault">
                    Dark
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Dragon" name="Dragon" id="Dragon">
                  <label class="form-check-label" for="flexCheckDefault">
                    Dragon
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Steel" name="Steel" id="Steel">
                  <label class="form-check-label" for="flexCheckDefault">
                    Steel
                  </label>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Fairy" name="Fairy" id="Fairy">
                  <label class="form-check-label" for="flexCheckDefault">
                    Fairy
                  </label>
                </div>
              </li>
            </ul>
          </div>
          
          <form action ="dh.php" method= "post">
            <input type="text"  id="search" name = "english">
            <input type = "submit" class = "submit" id ="submit">
          </form>
          
            
          

        </div>
        <!-- hero -->
        <div class="flex-container">
          <!-- pokemon-carousel -->
          <div class="carousel-container" id="carousel-container">
            <?php
             $p = file_get_contents( 'pokedex.json' );
             $p = json_decode( $p, true );
              foreach($p as $k =>$v){
                $classnames = implode(' ',$v['type']);
                echo '<div class="carousel-less-than-main '.$classnames.'">
                        <div class="sprite-container">
                          <img src ="assets/sprites/'.$v['id'].'MS.png">
                        </div>
                        <p class="pokemon-name '.$v['name']['english'].'">'.$v['name']['english'].'</p>
                        <p class="pokemon-type-car">'.$classnames.'</p>
                      </div>';
              }
            ?>
            <!-- <div class="carousel-less-than-main">
              <div class="sprite-container">
                <img src ="assets/sprites/001MS.png">
              </div>
              <p class="pokemon-name">bub</p>
            </div>
            <div class="carousel-main">
              <div class="sprite-container">
                <img src ="assets/sprites/002MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div>
            <div class="carousel-more-than-main">
              <div class="sprite-container">
                <img src ="assets/sprites/003MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div>
            <div class="carousel-more-than-main-2">
              <div class="sprite-container">
                <img src ="assets/sprites/004MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div>
            <div class="carousel-more-than-main-3">
              <div class="sprite-container">
                <img src ="assets/sprites/005MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div>
            <div class="carousel-more-than-main-4">
              <div class="sprite-container">
                <img src ="assets/sprites/005MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div>
            <div class="carousel-more-than-main-5">
              <div class="sprite-container">
                <img src ="assets/sprites/005MS.png">
              </div>
              <p class="pokemon-name">name</p>
            </div> -->
          </div>
          <!-- results -->
          <div class="hero-results-container">
            <!-- <div class="pokemon-picture-container-bg">
              <div class='pokemon-id-number'>
                <p>ID : #</p>
              </div>
              <div class="pokemon-picture-container">
                <img src="assets/img/1.png" alt="" class ="pokemon-pic">
              </div>
            </div>
            <h4>Name :</h4>
            <div class="pokemon-type">
            <p>Type :</p>
            <div class="pokemon-stat-container">
              <div class="hp-container">
                <p>HP : </p>
                <p class="stat-loop"> #</p>
              </div>
              <div class="hp-container">
                <p>Attack : </p>
                <p class="stat-loop"> #</p>
              </div>
              <div class="hp-container">
                <p>Defense : </p>
                <p class="stat-loop"> #</p>
              </div><div class="hp-container">
                <p>Sp. Attack : </p>
                <p class="stat-loop"> #</p>
              </div>
              <div class="hp-container">
                <p>Sp. Defense : </p>
                <p class="stat-loop"> #</p>
              </div>
              <div class="hp-container">
                <p>Speed : </p>
                <p class="stat-loop"> #</p>
              </div> -->
              






            <!-- </div> -->
            <?php
            $p = file_get_contents( 'search.json' );
            $p = json_decode( $p, true );
            // print_r($_SESSION["f"]);
            $n = $_SESSION["f"];
            $n = implode(' ',$n);
            // echo $n;
            // foreach($p as $k =>$v){
            //   $searched = $v['name']['english'];
            //   // print_r($searched);
              echo ' <h3>What you searched</h3>
              <p class = "poke">'.$n.'</p> 
              <br>
              <br>
              <h3>Search History</h3>';
              foreach ($p as $k =>$v){
                // print_r($v['english']);
                echo'
                <ul>
                  <li>'.$v['english'].'</li>
                </ul>';
              }
                

              
            // }
            
          
            
            
            
            
            
            
            
            
            
            
            
            
            ?>
          </div>      
        </div>
      </div> 

  

    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

        // Fire Filter
        $('#fire:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Fire').toggle();
        });
      
        // Water Filter
        $('#Water:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Water').toggle();
        });

        // Grass Filter
        $('#Grass:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Grass').toggle();
        });

        // Normal Filter
        $('#Normal:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Normal').toggle();
        });

        // Electric Filter
        $('#Electric:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Electric').toggle();
        });

        // Ice Filter
        $('#Ice:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Ice').toggle();
        });

        // FIghting Filter
        $('#Fighting:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Fighting').toggle();
        });

        // Poison Filter
        $('#Poison:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Poison').toggle();
        });

        // Ground Filter
        $('#Ground:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Ground').toggle();
        });

        // Flying Filter
        $('#Flying:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Flying').toggle();
        });

        // Psychic Filter
        $('#Psychic:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Psychic').toggle();
        });

        // Bug Filter
        $('#Bug:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Bug').toggle();
        });

        // Rock Filter
        $('#Rock:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Rock').toggle();
        });

        // Ghost Filter
        $('#Ghost:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Ghost').toggle();
        });

        // Dark Filter
        $('#Dark:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Dark').toggle();
        });

        // Dragon Filter
        $('#Dragon:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Dragon').toggle();
        });

        // Steel Filter
        $('#Steel:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Steel').toggle();
        });

        // Fairy Filter
        $('#Fairy:checkbox').change(function(){
          $(".carousel-less-than-main").not('.Fairy').toggle();
        });



        // // SearchBar
        // $('#search').keyup(function(){
        //   let searchValue = $('#search').val();
        //   searchValue.toString();
        //   console.log(searchValue)
        //   $()

          
          
           
        // });
      
        







    </script>

    
  </body>

</html>