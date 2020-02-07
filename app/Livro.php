<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'emprestimos', 'user_id');
    }

    public function checkEmpestado()
    {
        $emprestimo = new Emprestimo();

        $emprestado = $emprestimo->where('livro_id', $this->id)->get();

        return count($emprestado);
    }
}
