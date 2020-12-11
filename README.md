     O diário de aventuras é um projeto
 acadêmico sem grandes pretenções. O objetivo era criar um produto completo independentemente da complexidade. O diário visa guardar as melhores recordações de viagens e o que for considerado uma aventura, junto a um título e uma breve descrição.

 #primeiros passos

    - Faça o download do código
    - crie uma database com mysql chamada "laravel"
    - faça as configurações de acesso com ".env.example" e depois altere o nome para ".env"
    - abra um terminal na pasta diarioaventuras e rode os seguintes comandos:
            . composer install
            . php artisan migrate
            . php artisan storage:link
            . php artisan key:generate 
            . php artisan serve

    - acesse o "localhost:8000/" pelo navegador
