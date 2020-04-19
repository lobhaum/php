Na aula, fizemos um programa que vai mostrar a média das notas na escola.

Antes de criá-lo, primeiro precisamos criar uma pasta para o projeto, e iniciar o servidor embutido do php com o seguinte comando:

php -S 0.0.0.0:8000
Para acessar via navegador, utilize o endereço: http://localhost:8000

Para armazenarmos uma coleção de notas, podemos utilizar um array, e para usá-lo, contamos com duas sintaxes:

Assim:

$notas = array(9, 3, 10, 5, 10);
Ou assim:

$notas = [9, 3, 10, 5, 10];
Precisamos imprimir cada nota e exibir a média dos valores, podemos fazer a impressão usando a interpolação de strings:

echo "<p>Nota de português: $notas[0]</p>";
echo "<p>Nota de matemática: $notas[1]</p>";
echo "<p>Nota de geografia: $notas[2]</p>";
echo "<p>Nota de história: $notas[3]</p>";
echo "<p>Nota de química: $notas[4]</p>";
Armazenamos a quantidade de notas do array em uma variável, utilizando o retorno da função sizeof, que retorna o tamanho de um array:

$quantidadeNotas = sizeof($notas);
Para fazermos o cálculo da média, podemos utilizar um loop para iterarmos para cada elemento do array. E em cada iteração, vamos somar as notas em uma variável com o nome soma:

$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i++) {
    $soma = $soma + $notas[$i];
}
Com a soma feita, para calcularmos a média, basta fazermos a divisão:

$media = $soma / $quantidadeNotas;
Lembrando que ainda não realizamos nenhuma checagem do tamanho do array no código, e vimos no vídeo que isso pode causar problemas, neste caso, a divisão será feita por zero e dará um valor infinito.

Para adicionarmos a checagem, colocamos uma condicional no começo do código.

if ($quantidadeNotas !== 0) {

    $quantidadeNotas = sizeof($notas);

    $soma = 0;
    for ($i = 0; $i < $quantidadeNotas; $i++) {
        $soma = $soma + $notas[$i];
    }

    $media = $soma / $quantidadeNotas;

    echo $media;
}
Agora que temos o código, vamos extrair para um método. Crie um arquivo Calculadora.php e nele, cria uma classe Calculadora:

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $quantidadeNotas = sizeof($notas);
        if ($quantidadeNotas !== 0) {
            $soma = 0;

            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma = $soma + $notas[$i];
            }

            $media = $soma / $quantidadeNotas;

            return $media;
        } else {
            return null;
        }
    }
}
Voltando ao arquivo index.php, podemos executar o cálculo da média desta maneira:

require ‘Calculadora.php’;

$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

echo “<p>A média é: $media</p>”;
E se abrirmos o navegador, vemos que média foi calculada corretamente.