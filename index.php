<?php 
//ATIVIDADE 
function atividade1(){
    $v1 = 11;
    if($v1 > 10){
        echo "<h3>Atividade 1<br></h3>Valor maior que 10<hr>";
    }
    else {
        echo "<h3>Atividade 1<br></h3>Valor é menor ou igual a 10<hr>";
    }
}
atividade1();

function atividade2()
{
    $sexo = 'f';
    if ($sexo === "f") {
        echo "<h3>Atividade 2<br></h3>O sexo do usuario é Feminino<hr>";
    }
    else {
        echo "<h3>Atividade 2<br></h3>O sexo do usuario é Masculino<hr>";
    }
}
atividade2();

function atividade3()
{
    $a = 30;
    $b = 3;
    $c = 3;
    $d = 11;
    $soma = $a + $c;
    $mult = $b * $d;
    if ($soma > $mult) {
        echo "<h3>Atividade 3<br></h3>A soma de $a e $c [$soma] é maior que $b * $d [$mult]";
    } elseif ($soma < $mult) {
        echo "<h3>Atividade 3<br></h3>A soma de $a e $c [$soma] é menor que $b * $d [$mult]";
        
    }
    else {
        echo "<h3>Atividade 3<br></h3>A soma de $a e $c [$soma] é igual a $b * $d [$mult]<hr>";
    }
}
atividade3();

function atividade4(){
    $a = 10;
    $b = 25;
    if($a > $b){
        echo "<h3>Atividade 4<br></h3>$a ";
        echo "$b";
    }
    else {
        echo "<h3>Atividade 4<br></h3>$b ";
        echo "$a<hr>";
    }
}
atividade4();

function atividade5(){
    $n1 = 9;
    $n2 = 5;
    $n3 = 9;
    $n4 = 4;
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    $aluno = "Edu";
    echo "<h3>Atividade 5</h3><br>";
    if($media >= 7){
        echo "O $aluno foi aprovado com a média $media";
    }
    elseif ($media < 7) {
        echo "O $aluno foi reprovado com a média $media";
    }
    echo "<hr>";

}
atividade5();

function atividade6(){
    $nome = "Edu";
    $altura = 1.80;
    $peso = 80;
    $imc = $peso / pow($altura, 2);
    echo "<h3>Atividade 6</h3><br>";
    switch ($imc) {
        case $imc < 15:
            echo "O paciente $nome foi diagnosticado como: Extremamente abaixo do peso $imc";
            break;
        case $imc <= 16:
            echo "O paciente $nome foi diagnosticado como: Gravemente abaixo do peso $imc";
            break;
        case $imc <= 18.5:
            echo "O paciente $nome foi diagnosticado como: Abaixo do peso ideal $imc";
            break;
        case $imc <= 25:
            echo "O paciente $nome foi diagnosticado como: Peso ideal $imc";
            break;
            case $imc <= 30:
            echo "O paciente $nome foi diagnosticado como: Sobrepeso $imc";
            break;
            case $imc <= 35:
            echo "O paciente $nome foi diagnosticado como: Obesidade (Grau I) $imc";
            break;
            case $imc <= 40:
            echo "O paciente $nome foi diagnosticado como: Obesidade (Grau II) $imc";
            break;
        
        default:
            echo "O paciente $nome foi diagnosticado como: Obesidade (Grau III) $imc";
            break;
    }
    echo "<hr>";
}
atividade6();
?>