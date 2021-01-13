# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Aplicação com framework Lumen CRUD apis

Para rodar esta aplicação é necessário que tenhas instaldo o composer em sua máquina

Clone a aplicação deste repositório , crie um banco de dados chamado avaliation no
MYSQL e rode os seguintes comandos:

--> cd avaliation // entre dentro da pasta

--> php artisan migrate // migre a migração de artigo

--> php -S localhost:8000 -t public // rode no servidor local

--> Faça o consumo das APIS

http://localhost:8000/photo via get- Lista todos artigos

http://localhost:8000/photo/id_da_foto via get - Mostra um artigo por id

http://localhost:8000/photo/create via get- Mostra um teste de criação

http://localhost:8000/photo/id_da_foto/edit via get - Mostra um artigo por id para edição

http://localhost:8000/photo via post - Insere um artigo

{   
 "title":"Teste",
 "sub_title":"Teste2",
 "description":"teste2",
 "slug":"1",
 "is_active":1   
}

http://localhost:8000/photo/id_da_foto via put - Atualiza um artigo

{   
 "title":"Teste",
 "sub_title":"Teste2",
 "description":"teste2",
 "slug":"1",
 "is_active":1   
}

http://localhost:8000/photo/id_da_foto via delete - deleta um artigo

Testes unitários na pastas tests

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
