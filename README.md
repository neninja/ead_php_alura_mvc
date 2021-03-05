# ead_php_alura_mvc

> Projeto referente a [este](https://cursos.alura.com.br/course/php-model-view-controller) curso.

## Setup inicial

1. Habilite as extensões necessárias
```sh
php -r "var_dump([
    'postgresql' => extension_loaded('pgsql'),
    'pdo' => extension_loaded('pdo'),
    'integração postgresql-pdo' => extension_loaded('pdo_pgsql')
]);"

# caso precise habilitar alguma, edite seu php.ini que se encontra em:
# php --ini
```
2. Instale as dependências: ``composer i``
3. Crie o banco de dados
```sh
createdb -U postgres ead_php_alura_mvc

# dicas do postgresql no terminal:
# Entrar
psql -U postgres -d ead_php_alura_mvc

# \?                    exibe ajuda
# \q                    sai
# \l                    lista databases
# \c <databasename>     conecta uma database
# \dt                   lista tables da database
# \d <tablename>        descreve uma tabela
```
4. Renomeie `.env.example` para `.env`
5. Crie as tabelas que as entidades refletem
```sh
composer doctrine orm:schema-tool:create
```

## Servidor

```sh
php -S localhost:8080 -t public
```
