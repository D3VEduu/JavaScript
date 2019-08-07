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
// Atividade 7
// Efetue um algoritmo PHP que contém as variáveis Nome Funcionário, Valor Salário por Hora, Número de Horas Trabalhadas e imprima o salário reajustado com base na seguinte regra:
// - salário até 300, reajuste de 50%
// - salário maiores que 300, reajuste de 30%
function atividade7(){
    $nome = "Edu";
    $valorhora = 40;
    $horatrabalhadas = 45;
    $salario = ($valorhora * $horatrabalhadas);

    if($salario <= 300){
        $salariofinal = $salario + ($salario * 0.3);
    }
    else {
        $salariofinal = $salario + ($salario * 0.5);
    }
}
atividade7();

// Atividade 8
// Faça um algoritmo PHP que leia um número entre 0 e 10 contido em uma variável, e escreva este número por extenso.
function atividade8(){

}
    atividade8();

// Atividade 9
// Faça um algoritmo PHP que contém uma variável com um valor inteiro. O programa deverá então imprimir todos os valores pares, e posteriormente todos os valores ímpares. Exemplo para variável 5, imprimirá “2 4 1 3 5”.
function atividade9(){

}
    atividade9();

// Atividade 10
// Faça um algoritmo PHP, que irá exibir a data atual por extenso do seguinte modo: “Tatuí, 31 de Julho de 2019”.
function atividade10(){

}
    atividade10();

// Atividade 11
// Efetue um algoritmo PHP, que irá exibir uma mensagem de qual bimestre do ano estamos. Exemplo: “Estamos no 1º Bimestre de 2019”.
function atividade11(){

}
    atividade11();

// Atividade 12
// Efetue um algoritmo PHP, que com base na sua data de nascimento exiba quantos dias de vida você possui.
function atividade12(){

}
    atividade12();

// Atividade 13
// Efetue um algoritmo PHP que contém as variáveis Código Cargo, Nome do Trabalhador, Data de Nascimento, Tempo Contribuição. Com base nas informações abaixo, imprima a mensagem se a pessoa já está habilitada a se aposentar ou não.
// Imprima a saída final do seguinte modo:
// Nome: Inocêncio Coitadinho Cargo: Trabalhador Rural Tempo Contribuição: 15 anos Idade do Trabalhador: 60 anos
// Código Cargo
// Cargo
// Tempo Contribuição
// Idade Mínima
// 1
// Trabalhador Rural
// 15 anos
// 60 (homem), 55 (mulher)
// 2
// Trabalhador Geral
// 20 anos
// 65 (homem), 62 (mulher)
// 3
// Político
// 20 anos
// 65 (homem), 62 (mulher)
// 4
// Servidor Público
// 25 anos
// 65 (homem), 62 (mulher)
// 5
// Policial
// 30 (homem), 25 (mulher)
// 55 (ambos)
function atividade13(){

}
    atividade12();
?>