<?php



// --------------------------------------------------------------
//                   Trikampio ploto skaičiavimas
// -------------------------------------------------------------



$a = "";
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
    $a = $_POST['a'] ;
    $b = $_POST['b'] ;
    $c = $_POST['c'] ;







    /** Skaičiuoja trikampio plotą ir išveda rezultato tikslumą dviejų skaičių po kablelio.
     * @param $a trikampio kraštine 1
     * @param $b trikampio kraštine 2
     * @param $c trikampio kraštine 3
     * @return string  funkcija kuri išveda rezultatą ( kuriai paduodamas plotas ir kiek skaičių po kablelio reikia išvesti)
     */
    function plotas(int $a,int $b, int$c){
        // Gaunamas trikampio perimetras

            $p = ($a + $b + $c) /2 ;

        // traukiama šaknis gauti trikapio plotą

            $s = sqrt( $p * ($p - $a)*($p - $b)*($p - $c));

        // kintamasis kuris nurodo kiek skaičiu po kablelio gausime rezultate

            $pre = 2 ;

        // rezultatas
        
            return number_format($s, $pre);
    }


}
// --------------------------------------------------------------
//                   Skaičiaus trinimas iš masyvo
// -------------------------------------------------------------

$mas= [1,2,3,4,5,6,7,8,9,10] ;

    if(isset($_POST['delete'])){
        $delete =(int)$_POST['delete']-1;


        /** Ištrinamas vienas skaičius iš masyvo;
         * @param $delete paduodamas skaičius kuri reikia ištrinti
         * @return void
         */
        function remove(int $delete){
                        $mas= [1,2,3,4,5,6,7,8,9,10] ;

                // Ištrinamas skaičius
                        unset($mas[$delete]);

               // išvedimas masyvo su ištrintu skaičiumi
                        foreach ($mas as $key =>$value){
                                if($key == 9){
                                    echo $value;
                                    continue;
                                }

                            echo $value.' ,';

                        }



        }
    }



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triangle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container d-flex justify-content-between">

    <form method="post" class="col-md-6">


        <div class="card  d-flex flex-column align-items-center mt-5 bg-success">


                        <div class="card-header">
                            <div class="card-title font-monospace">
                                <h1>Rasti trikampio plotą</h1>
                            </div>
                        </div>


                    <div class="card-body d-flex flex-column align-items-center col-md-12 ">
                        <input class="form-control mt-3 w-50" type="text" name="a">
                        <input class="form-control mt-3 w-50" type="text" name="b">
                        <input class="form-control mt-3 w-50" type="text" name="c">
                        <button class="btn btn-primary mt-5 align-self-md-end ">Skaičiuoti plotą</button>

                    </div>


        </div>


        <div class=" text-center mt-5"><h1 class="text-success"><?= ($a > 0)?'Plotas yra '.plotas($a,$b,$c).' kvadratinių centimetrų':""  ?></h1></div>

    </form>




    <form method="post" class="col-md-6 ">


        <div class="card  d-flex flex-column align-items-center mt-5 bg-success">



                    <div class="card-header">
                        <div class="card-title font-monospace">
                            <h1>Išbraukti skaičių iš masyvo</h1>
                        </div>
                    </div>


                    <div class="card-body d-flex flex-column align-items-center col-md-12 ">
                        <input class="form-control mt-3 w-50" type="text" name="delete">

                        <button class="btn btn-primary mt-5 align-self-md-end ">Trinti</button>

                    </div>
        </div>

        <div class="text-center mt-5">
            <h2 class="text-danger font-monospace">Masyvas</h2>
            <p class="fs-4 font-monospace"><?php

                if(isset($_POST['delete'])){
                    remove($delete);

                }else{
                    foreach($mas as $value){
                        if($value == 10){
                            echo $value ;
                            continue;
                        }
                        echo $value.', ' ; }
                }
                ?>


            </p>
        </div>
    </form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
