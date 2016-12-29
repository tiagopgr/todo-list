To-do List
==========

*Pequeno sistema para a segunda fase de seleção da vaga de Desenvolvedor PHP*
*Sistema utilizando persistencia de dados em arquivo de texto no formato json no diretorio /storage/database/*

Requisitos básicos
------------------

 - Composer
 - PHP >= 5.5.9
 - OpenSSL PHP Extension
 - PDO PHP Extension
 - Mbstring PHP Extension
 - Tokenizer PHP Extension

Instalação
----------

 1. Clonar o respoitorio: <pre>git clone https://github.com/tiagopgr/todo-list</pre>
 2. Criar o arquivo de configuração: <pre>cp .env.example .env</pre>
 3. Gerar a chave de acesso: <pre>php artisan key:generate</pre>
 4. Acessar a pasta e executar o comando composer install
 5. Executar o comando "php artisan serve"
 6. Acessar o exemplo utilizando a url [http://localhost:8000/](http://localhost:8000/)