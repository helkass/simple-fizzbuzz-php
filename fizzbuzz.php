<?php

// simple fizzbuzz challenge in PHP

function fizzbuzz($num){
    for ( $i = 1; $i < $num; $i++) { 
        if ( $i % 3 == 0 && $i % 5 == 0 ) {
            echo $i . "is fizzBuzz<br/>";
        }
        elseif ( $i % 3 == 0 ){
            echo $i . "is fizz<br/>";
        }
        elseif ( $i % 5 == 0 ){
            echo $i . "is buzz<br/>";
        }
        else echo $i . "<br/> ";
    }
}

fizzbuzz(50);