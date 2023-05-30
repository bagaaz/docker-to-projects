# Docker to Projects

## Descrição

Este é um ambiente de desenvolvimento dockerizado que contém as seguintes tecnologias:

- Apache2
- PHP 8.2.6
- MySQL
- phpMyAdmin
- Redis
- Python 3.9.2
- Node 18.16.0

Ele foi projetado para ser altamente flexível e fácil de usar. Cada pasta dentro do diretório `sites/` é tratada como um subdomínio do localhost. Além disso, o Apache está configurado para criar automaticamente um subdomínio para cada nova pasta adicionada ao diretório `sites/`.

## Instruções de Uso

1. **Clone o repositório**: Para clonar o repositório, você precisará ter o Git instalado em sua máquina. Abra um terminal e digite o seguinte comando:
    ```bash
    git clone git@github.com:bagaaz/docker-to-projects.git
    ```
    Este comando irá clonar o repositório para a sua máquina local.

2. **Navegue até o diretório raiz do projeto**: Uma vez que o repositório tenha sido clonado, você precisará navegar até o diretório raiz do projeto. Para isso, use o seguinte comando:
    ```bash
    cd docker-to-projects
    ```
    Este comando irá levar você para o diretório raiz do projeto.

3. **Execute o Docker Compose**: Agora, você precisa rodar o Docker Compose para construir e iniciar os serviços definidos no arquivo `docker-compose.yml`. Faça isso com o seguinte comando:
    ```bash
    docker-compose up -d --build
    ```
    Este comando irá construir e iniciar os serviços em segundo plano. O parâmetro `-d` indica que os serviços devem ser iniciados em segundo plano, enquanto o parâmetro `--build` indica que o Docker Compose deve construir as imagens antes de iniciar os serviços.

4. **Crie uma nova pasta**: Adicione uma nova pasta no diretório `sites/`. O nome desta pasta será usado como o subdomínio. Por exemplo, se você criar uma pasta chamada `example`, você poderá acessar o site através do endereço `example.localhost`.

5. **Prepare o ponto de entrada do site**: Dentro de cada pasta do site, crie uma subpasta chamada `public` e adicione um arquivo `index` (por exemplo, `index.php` ou `index.html`). Este será o ponto de entrada para o seu site.

6. **Acesse o phpMyAdmin**: Para acessar o phpMyAdmin, visite `localhost:8080` no seu navegador. Este será o painel de controle para gerenciar seus bancos de dados.


## Informações Adicionais

- Para acessar o container (por exemplo, para executar comandos como `php artisan` para Laravel), use o seguinte comando: `docker exec -it webserver bash`.
- Se você encontrar problemas de permissão no VSCode, você pode resolver isso executando o seguinte comando dentro da pasta raiz do subdomínio: `chown -R devuser.devuser .`

## Contribuição

Sinta-se à vontade para contribuir com este projeto. Todas as sugestões e melhorias são bem-vindas.

## Licença

Este projeto é licenciado sob os termos da Licença MIT.
