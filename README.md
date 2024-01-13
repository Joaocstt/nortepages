# Site de vendas de serviços 🚀

Este repositório contém o código-fonte do meu site, onde apresento meus serviços de criação de sites e sistemas para vendas.

## Tecnologias Utilizadas 🛠️

O site é construído com o poderoso framework [Laravel](https://laravel.com), utilizando a template engine [Blade](https://laravel.com/docs/blade). Algumas das principais características do meu projeto incluem:

- **Formulário de Contato via Email:** Utilize o formulário de contato integrado para enviar mensagens diretamente para o meu e-mail.

- **Fila com Banco de Dados:** Para garantir uma comunicação eficiente, implementei uma fila com banco de dados. Isso proporciona uma experiência mais rápida e eficaz no processamento de solicitações de contato.

## Como utilizar 🤝

1. **Clone o Repositório:**
   
   ```bash
   git clone https://github.com/joaocstt/nortepages.git
   cd nortepages

2. **Instale as Dependências do Node.js:**
   
   ```bash
   npm install

3. **Instale as Dependências do Composer:**
   ```bash
   composer install

4. **Configure o Ambiente:**
   ```bash
   Configure suas variáveis de ambiente, como banco de dados e configurações de e-mail.

5. **Gere a Chave de Aplicação:**
6. 
   ```bash
   php artisan key:generate

7. **Execute as Migrações do Banco de Dados:**
. 
   ```bash
    php artisan migrate

8. **Inicie o Servidor Local::**
   
   ```bash
    php artisan serve
   
9. **Inicie a Work Queue para Fila com Banco de Dados:**

   ```bash
    php artisan migrate
   

## Licença 📄

Este projeto é open-source e utiliza a licença [MIT](https://opensource.org/licenses/MIT). Sinta-se à vontade para explorar, contribuir e adaptar conforme necessário.

Agradeço por visitar meu repositório e estou ansioso para receber seu feedback!

