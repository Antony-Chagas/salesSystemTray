# Sistema de vendas 🛍️

Projeto para processo seletivo da vaga de programador Júnior na empresa Tray.

## Indice
* [Índice](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Descrição do Projeto](https://github.com/Antony-Chagas/salesSystem/blob/main/README.md#descri%C3%A7%C3%A3o-do-projeto-)
* [Tecnologias utilizadas](https://github.com/Antony-Chagas/salesSystem/blob/main/README.md#tecnologias-utilizadas-)
* [Funcionalidades do projeto](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Como de usar a aplicação](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Banco de dados](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Paginas do projeto](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
  

## Descrição do Projeto 📰
* Sistema para cadastro de vendas para vendedores.
* Sistema desenvolvido para ajudar e facilitar o controle das vendas, podendo incluir vendas para seus respectivos vendedores, além de conseguir atualizar, visualizar e excluir vendas e vendedores.
  ![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/e7b874e8-48f2-4e88-a502-e6274d95390e)

## Tecnologias utilizadas 🖥
* **XAMPP** Foi utilizada a versão 3.3.0, utilizado para ativar o servidor local e uso do PHP e banco de dados.
* **PHP 8:** Foi utilizada a versão  PHP 8.2.12, utilizado para criação do do BackEnd do projeto.
* **bootstrap:** Foi utilizada a versão 4.5, utilizado para configuração do front, deixando o sistema mais funcional e mais profissional
* **MySQL:** Banco utilizado na aplicação.
* **Composer:** Utilizado para instalação do Framework laravel
* **Framework laravel** Foi utilizada a versão 11x.

## Funcionalidades do projeto 🛠️

* Criar, deletar, atualizar e visualizar vendas realizadas.
* Criar, deletar, atualizar e visualizar vendedores.

## Como usar a aplicação ⚙️

### O que deve ter na sua máquina:
* **XAMPP**: Você pode fazer o download pelo link https://www.apachefriends.org/download.html <br>
  Após fazer a instalação acesse a pasta C:\xampp\php\php.ini e habilite `extension=pdo_mysql`, basta apenas remover o ";"
  ![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/ce1e5437-e1ba-49ee-9a5b-0e04e6b8351f)

* **Editor de código**: O que foi utilizado no desenvolvimento foi Visual Studio Code, download https://code.visualstudio.com/download
* Acesse o XAMPP e ligue o Apache e MySQL
  
 ![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/f5fe1b87-6776-4039-8fb7-8e9220469452)

* Instale o laravel como o comando:
~~~php
composer create-project laravel/laravel example-app
~~~ 
* Ative o servidor do laravel como o comando:
~~~php
php artisan serve
~~~
    
## Banco de dados
* Crie um novo banco de dados (Acesse o banco pelo XAMPP, na linha MySql clique em Admin).
* Configure a conexão com o banco de dados no arquivo .env localizado na raiz do projeto. Exemplo de configuração:
~~~php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=salessystem
DB_USERNAME=root
DB_PASSWORD=
~~~
* Execute as migrações do banco de dados para criar as tabelas necessárias.
~~~php
php artisan migrate
~~~

## Paginas do projeto

### `Litas de vendedores:`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/8396846c-78ee-426e-9de3-e9d2d05ccbda)

### `Vendas dos vendedores:`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/29d54f65-3a8d-406f-b552-eefc2f9c5a83)

### `Vendedor:`
* `Editar` 
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/99323925-0a2b-4ab5-ba51-94ec553ffe51)
* `Criar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/6499ad89-b01a-4feb-9b2d-9aa19653e456)
* `Deletar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/ff747b84-aa04-4644-a43e-6fa9e9f88569)

### `Vendas`
* `Editar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/ba809475-4620-4d06-b386-7a7a84088663)
* `Criar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/3eaf1b09-87a1-4b5b-bf5f-fdf4f4e0096a)
* `Deletar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/9bc2be89-5422-4ef0-a4c3-32ded5b0a650)

