# esportivo
Sistema de Gestão Esportiva

Conexão mysql local 

Configuração de ambiente laravel 8
Download para windows

1- Instalar o XAMPP distribuição do Apache contendo PHP, MySQL:
https://www.apachefriends.org/pt_br/download.html

Configurar diretório em seu PATH para que oexecutável seja encontrado

2- Instalação do gerenciador de dependencia Composer:
https://getcomposer.org/download/

3- Instale o framework Laravel via Composer:
>_ composer global require "laravel/installer=~1.1"

4- Download do projeto:
https://github.com/Bianca-Soares/blog-esportivo

5- Configurar servidor

Sem a pasta vendor
no terminal na pasta do projeto comando:
>_ composer install

Criar arquivo .env
>_ copy .env.example .env

Inicializar servidor
>_ php artisan serve
 Starting Laravel development server: http://127.0.0.1:8000
 endereço: http://127.0.0.1:8000

6- Configurar banco local
 Criar banco de dado nome: esportiva.
   console mysql
   > create database esportiva;

7- no terminal dentro do projeto executar as migrações:
>_ php artisan migrate
Tabelas foram criadas
Pronto para o cadastro
