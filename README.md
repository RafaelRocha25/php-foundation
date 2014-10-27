#Projeto 1 - PHP Foundation - Code Education

- Criei o repositório no github;
- Criei o repositório local e dei git clone no repositório criado no github;
- O arquivo **index.php** tem toda a estrutura do site, como menu e rodapé;
- Ainda no arquivo **index.php** recebo o parâmetro arquivo via GET e chamo as páginas específicas;
- Caso o arquivo não exista no servidor uma mensagem de erro 404 é exibida, mas se o parâmetro *arquivo* for nulo o arquivo **home.php** é chamado;
- Acrescentei um esquema de rotas que consegue lidar com arquivos que estão em subpastas: /paginas/arquivo.php e com arquivos que estão no diretório raiz /arquivo.php