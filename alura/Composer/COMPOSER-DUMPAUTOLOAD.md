Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxima aula.

1) No seu editor de código abra o arquivo buscador-cursos.php e apague a linha require 'src/Buscador.php';

2) Agora abra o arquivo composer.json e adicione no final a configuração do autoload (dentro das chaves principais) para mapear o namespace padrão:

"autoload": {
    "psr-4": {
        "Alura\\BuscadorDeCursos\\": "src/"
    }
}
3) Para gerar o arquivo autoload.php execute na linha de comando:

 composer dumpautoload
4) Agora execute na linha de comando:

php buscador-cursos.php
5) (Opcional) Experimente também o uso o classmap e e arquivos (files) no composer.json.