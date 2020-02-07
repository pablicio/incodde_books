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
                    'imagem' => 'img1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 2',
                    'descricao' => 'Descrição 2',
                    'imagem' => 'img2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 3',
                    'descricao' => 'Descrição 3',
                    'imagem' => 'img3',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 4',
                    'descricao' => 'Descrição 4',
                    'imagem' => 'img4',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 5',
                    'descricao' => 'Descrição 5',
                    'imagem' => 'img5',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 6',
                    'descricao' => 'Descrição 6',
                    'imagem' => 'img6',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 7',
                    'descricao' => 'Descrição 7',
                    'imagem' => 'img7',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 8',
                    'descricao' => 'Descrição 8',
                    'imagem' => 'img8',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 9',
                    'descricao' => 'Descrição 9',
                    'imagem' => 'img9',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 10',
                    'descricao' => 'Descrição 10',
                    'imagem' => 'img10',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 11',
                    'descricao' => 'Descrição 11',
                    'imagem' => 'img11',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 12',
                    'descricao' => 'Descrição 12',
                    'imagem' => 'img12',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Livro 13',
                    'descricao' => 'Descrição 13',
                    'imagem' => 'img13',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
