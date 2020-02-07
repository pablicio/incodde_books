<?php namespace App\Http\Controllers;

use App\Livro;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(Request $request)
    {
        $livros = Livro::paginate(6);

        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $livro = new Livro();

        $livro = $livro->create($request->all());

        return redirect()->to('/livros');
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);

        return view('livros.form', compact('livro'));
    }

    public function update($id, Request $request)
    {
        $livro = Livro::findOrFail($id);

        $livro->update($request->all());

        return redirect()->to('livros');
    }

    public function delete($id)
    {
        Livro::findOrFail($id)->delete();

        return redirect()->to('livros');
    }
}
