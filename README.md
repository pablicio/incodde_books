## Manual de instalação

Sistema que permitirá aos usuários manterem livros.

## Instruções

- Baixe o repositório
```bash
git clone https://github.com/pablicio/incodde_books.git
```


- Va para a pasta do projeto
```bash
cd incodde_books
```

- Rode o composer install

```bash
composer install
```


- Configure o .env

```bash
copiar .env.example .env
```

- Gere a key da aplicação

```bash
php artisan key:generate
```

- Crie um banco apenas com o nome no mysql

```bash
o mesmo nome que for configurar no .env
```

- Rode as migrações

```bash
php artisan migrate
```

- Rode as seeders

```bash
php artisan db:seed
```
