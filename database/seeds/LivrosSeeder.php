<?php

use Illuminate\Database\Seeder;

class LivrosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
                [
                    'nome' => 'Livro 1',
                    'descricao' => 'Descrição 1',
                    'imagem' => 'essential.jpg',
                     'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 2',
                    'descricao' => 'Descrição 2',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 3',
                    'descricao' => 'Descrição 3',
                    'imagem' => 'essential.jpg',
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 4',
                    'descricao' => 'Descrição 4',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 5',
                    'descricao' => 'Descrição 5',
                    'imagem' => 'essential.jpg',
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 6',
                    'descricao' => 'Descrição 6',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 7',
                    'descricao' => 'Descrição 7',
                    'imagem' => 'essential.jpg',
                    'user_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 8',
                    'descricao' => 'Descrição 8',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 9',
                    'descricao' => 'Descrição 9',
                    'imagem' => 'essential.jpg',
                    'user_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 10',
                    'descricao' => 'Descrição 10',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 11',
                    'descricao' => 'Descrição 11',
                    'imagem' => 'essential.jpg',
                    'user_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 12',
                    'descricao' => 'Descrição 12',
                    'imagem' => 'hero2x.jpg',
                    'user_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 13',
                    'descricao' => 'Descrição 13',
                    'imagem' => 'essential.jpg',
                    'user_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
