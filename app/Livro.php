<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'emprestimos', 'livro_id');
    }

    public function checkEmpestado()
    {
        return $this->users()->count();
    }
}
