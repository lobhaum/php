Para darmos início ao curso, precisamos configurar o nosso ambiente. Como iremos partir do princípio de que você já fez os cursos de PHP - Primeiros Passos com a Linguagem e PHP - Avançando com a Linguagem, você já deverá ter o PHP instalado.

Também partiremos do princípio de que você já fez o curso de Doctrine e conhece um pouco o Composer, um gerenciador de dependências - ou seja, um programa que gerencia alguns pacotes, bibliotecas ou componentes que usaremos ao longo do curso.

Caso você ainda não o tenha instalado e esteja utilizando o Windows, poderá baixar o instalador https://getcomposer.org/, executar o .exe e seguir as instruções na tela. No Linux ou no Mac, bastará executar os comandos disponíveis no site.

Com o PHP e o Composer instalados, você deverá baixar e extrair o ZIP contendo o projeto inicial.

Como nesse treinamento nós criaremos um gerenciador de cursos, podemos renomear a pasta onde o conteúdo foi extraído para "gerenciador-de-cursos", mas você pode escolher outro nome se preferir. Em seguida, abriremos o Prompt de Comando e navegaremos até essa pasta.

Feito isso, acessaremos o arquivo php.ini da pasta de configurações do PHP (onde você o instalou). No Linux, você pode encontrar essa pasta executando php -i no Terminal para printar todas as informações da sua instalação do PHP. Nesse ambiente, você poderá utilizar o comando php -i | grep "php.ini" para conseguir o caminho desse arquivo.

Abriremos o php.ini com o bloco de notas e, com "Ctrl + F", buscaremos por "sqlite". Em seguida, removeremos o ponto e vírgula da linha ;extension=pdo_sqlite para descomentá-la e salvaremos as alterações.

De volta ao terminal, executaremos composer install para instalarmos todas as dependências que precisaremos para o nosso projeto inicial, que por enquanto é só o Doctrine.

Enquanto as dependências são instaladas, podemos abrir um editor de texto e acessar a pasta "gerenciador-de-cursos" para trabalharmos no projeto. Durante o curso utilizaremos o PhpStorm, mas você pode optar pelo Eclipse ou qualquer outro editor.

De início, já temos uma pasta "public", que será a única acessível pela Web. Isso é uma medida de segurança que impede que algum usuário consiga ler o restante dos nossos arquivos por meio do servidor Web caso tenhamos algum problema de segurança, protegendo nosso dados de configuração e outras informações.
