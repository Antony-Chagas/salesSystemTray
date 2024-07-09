# Sistema de vendas 🛍️

Projeto para processo seletivo da vaga de programador Júnior na empresa Tray.

## Indice
* [Índice](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Descrição do Projeto](https://github.com/Antony-Chagas/salesSystem/blob/main/README.md#descri%C3%A7%C3%A3o-do-projeto-)
* [Tecnologias utilizadas](https://github.com/Antony-Chagas/salesSystem/blob/main/README.md#tecnologias-utilizadas-)
* [Funcionalidades do projeto](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Como de usar a aplicação](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Banco de dados](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)
* [Configurações do envio de email](https://github.com/Antony-Chagas/salesSystemTray/blob/main/README.md#configura%C3%A7%C3%B5es-do-envio-de-email-)
* [Paginas do projeto](https://github.com/Antony-Chagas/salesSystem/edit/main/README.md#indice)


## Descrição do Projeto 📰
* Sistema para cadastro de vendas para vendedores.
* Sistema desenvolvido para ajudar e facilitar o controle das vendas, podendo incluir vendas para seus respectivos vendedores, além de conseguir atualizar, visualizar e excluir vendas e vendedores.
* Além de poder encaminhar um email diário com todas as vendas feitas naquele dia.
  ![image](https://github.com/Antony-Chagas/salesSystemTray/assets/104728389/08731afd-3092-4fa5-ae65-f8deb1b2fa37)


## Tecnologias utilizadas 🖥
* **XAMPP** Foi utilizada a versão 3.3.0, utilizado para ativar o servidor local e uso do PHP e banco de dados.
* **PHP 8:** Foi utilizada a versão  PHP 8.2.12, utilizado para criação do do BackEnd do projeto.
* **bootstrap:** Foi utilizada a versão 4.5, utilizado para configuração do front, deixando o sistema mais funcional e mais profissional
* **MySQL:** Banco utilizado na aplicação.
* **Composer:** Utilizado para instalação do Framework laravel
* **Framework laravel** Foi utilizada a versão 11x.
* **Mailtrap** Utilizado para configurar o sistema e mail

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
## Configurações do envio de email 📩
 Foi utilizado Mailtrap para envio do email, o mesmo possui uma versão gratuita, com algumas limitações, mas bem funcional.
 
 Site Mailtrap: https://mailtrap.io/
 Configuração de conexão feita no arquivo .env, os dados conexão varia para cada conta, acesse o sistema mailtrap e verifique os dados específico.
 
 Exemplo de configuração:
~~~php
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME="42b9a2fab1d6e9"
MAIL_PASSWORD="76221eb895eab7"
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="antony.thiago445@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_TO="antony.thiago445@gmail.com"
~~~
**`Botão de envio`**

![image](https://github.com/Antony-Chagas/salesSystemTray/assets/104728389/8101fb07-4744-4dae-b356-63536c614452)

**`Formato que é enviado os E-mails`**

![image](https://github.com/Antony-Chagas/salesSystemTray/assets/104728389/041c79a1-97e8-4a7e-9ed0-94c3ccd58a59)


 
## Paginas do projeto 🌐

**`Litas de vendedores:`**
![image](https://github.com/Antony-Chagas/salesSystemTray/assets/104728389/d0ad82ba-161e-48f2-be67-293e4c121cef)

**`Vendas dos vendedores:`**
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/29d54f65-3a8d-406f-b552-eefc2f9c5a83)

**`Histórico de vendas:`**
![chrome-capture-2024-7-9](https://github.com/Antony-Chagas/salesSystemTray/assets/104728389/f4737f6d-7eab-4bf2-8173-59b43bd51722)


#### `Vendedor:`
* **`Editar` **
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/99323925-0a2b-4ab5-ba51-94ec553ffe51)
* `Criar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/6499ad89-b01a-4feb-9b2d-9aa19653e456)
* `Deletar`
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/ff747b84-aa04-4644-a43e-6fa9e9f88569)

#### `Vendas`
* **`Editar`**
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/ba809475-4620-4d06-b386-7a7a84088663)
* **`Criar`**
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/3eaf1b09-87a1-4b5b-bf5f-fdf4f4e0096a)
* **`Deletar`**
![image](https://github.com/Antony-Chagas/salesSystem/assets/104728389/9bc2be89-5422-4ef0-a4c3-32ded5b0a650)

