<?php
    /*  Aula..
    function calcularAreaTerreno ($largura,$comprimento){
        $area= $largura*$comprimento;	
	    return $area;}

        echo calcularAreaTerreno(10,20);
    
        $texto= "Batata é bom.";
        echo strtoupper ($texto);

        $texto= "Batata é bom.";
        echo strto ($texto);

       
        $texto= "Batata é bom.";
        echo ucfirst ($texto);

        $texto= "Batata é bom.";
        echo strlen ($texto);


        $paralelepipedo= "O paralelepipedo é uma figura geométrica.";
        // palavra a ser substituida
        $procura= "paralelepipedo";
        //palavra nova
        $substitui="quadrado";
        //criar outra variavel
        $nova_string= str_replace($procura, $substitui, $paralelepipedo);
        echo $nova_string;


        $nome= "isabelli";
        $subText= substr ($nome,0,3);
        echo $subText;


        $miojo= 3.50;
        echo ceil ($miojo);

        $miojo= 3.50;
        echo floor ($miojo);

        $miojo= 3.50;
        echo round ($miojo);

        
        echo rand (10,30);


        echo sqrt (144);


        echo sqrt (9);*/



/*1-Declare uma variável $x com o valor 5. Em seguida, incremente seu
valor em 1 e exiba o resultado.*/

$x= 5;
echo "O valor contido em a após o incremento é: " . $x++. "<br/>";
echo "O valor atualizado de a é: .$x <br/>";

/*2-Declare uma variável $y com o valor 10. Em seguida, decrete seu valor
em 1 e exiba o resultado */

$y= 10;
echo "O valor contido em a é:  $y";
echo "O valor contido em a após o decremento é: . --$y <br/>"; 


/*3. Declare uma variável $a com o valor 3. Primeiro, exiba o valor de $a e
depois incremente usando pré-incremento e pós-incremento.*/ 


$a= 3;
echo "O valor contido em a é: .$a. <br/>";
echo "O valor contido em a após o incremento é:" .++$a. "<br/>";

echo "O valor contido em a após o incremento é:" .$a++.  "<br/>" ;
echo "O valor atualizado de a é: $a ";



/*
4. Declare uma variável $b com o valor 8. Primeiro, exiba o valor de $b e
depois decrete usando pré-decremento e pós-decremento.*/

$b=8;
echo "O valor contido em a é:"  . $b . "<br/>";
echo "O valor contido em a após o decremento é: " . --$b.  "<br/>";
echo "O valor contido em a após o decremento é: " . $b-- . "<br/>";
echo "O valor atualizado de a é:"  .$b ;

/*5. Crie uma função chamada helloWorld que não recebe nenhum
argumento e apenas imprime "Hello, World!".*/  




?>