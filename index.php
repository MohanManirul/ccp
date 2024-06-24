
<?php

$options = getopt("", ["min::","max::"]);

$min    = $options["min"]?? 1;
$max    = $options["max"]?? 100 ;

$number = rand( $min , $max );
var_dump($number);
while(true){
    $guessess = readline("What is the number ? ");
    if( $guessess == $number ){
        print("Yes you are correct ! \n");
        break;
    }else if($guessess > $number){
        print("try small number ! \n");
    }else{
        print("try higher number ! \n");
    }
}