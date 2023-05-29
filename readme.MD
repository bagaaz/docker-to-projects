# Nome do Seu Projeto

## Descrição

Este é um ambiente de desenvolvimento dockerizado que contém as seguintes tecnologias:

- Nginx
- PHP 8.1
- MySQL
- phpMyAdmin
- Redis
- Python 3.10
- Node 18

Ele foi projetado para ser altamente flexível e fácil de usar. Cada pasta dentro do diretório `sites/` é tratada como um subdomínio do localhost. Além disso, o nginx está configurado para criar automaticamente um subdomínio para cada nova pasta adicionada ao diretório `sites/`.

## Instruções de Uso

1. Clone este repositório para a sua máquina local.
2. Navegue até o diretório raiz do projeto.
3. Execute o comando `docker-compose up -d --build`.
4. Adicione uma nova pasta no diretório `sites/`. O nome desta pasta será usado como o subdomínio. Por exemplo, se você criar uma pasta chamada `example`, você poderá acessar o site através do endereço `example.localhost`.
5. Dentro de cada pasta do site, crie uma subpasta chamada `public` e adicione um arquivo `index` (por exemplo, `index.php` ou `index.html`). Este será o ponto de entrada para o seu site.
6. Para acessar o phpMyAdmin, visite `localhost:8080` no seu navegador.

## Informações Adicionais

- Para acessar o container (por exemplo, para executar comandos como `php artisan` para Laravel), use o seguinte comando: `docker exec -it webserver bash`.
- Se você encontrar problemas de permissão no VSCode, você pode resolver isso executando o seguinte comando dentro da pasta raiz do subdomínio: `chown -R devuser.devuser .`

## Contribuição

Sinta-se à vontade para contribuir com este projeto. Todas as sugestões e melhorias são bem-vindas.

## Licença

Este projeto é licenciado sob os termos da Licença MIT.
