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
        $this->validate(request(), [
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = null;
        if (request()->hasFile('imagem')) {
            $file = request()->file('imagem');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/images/', $fileName);
        }



        $request = $request->all();
        $request['imagem'] = $fileName;
        $request['user_id'] = auth()->user()->id;

        $livro = new Livro();

        $livro->create($request);

        return redirect()->to('/livros');
    }

    public function show($id)
    {
        $livro = Livro::findOrFail($id);

        return view('livros.show', compact('livro'));
    }

    public function meusEmprestimos()
    {
        $user = auth()->user();

        $livros = $user->livros()->paginate(6);

        return view('livros.meusEmprestimos', compact('livros'));
    }

    public function meusLivros()
    {
        $user = auth()->user();

        $livros = $user->meusLivros()->paginate(6);

        return view('livros.meusLivros', compact('livros'));
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


    public function novoEmprestimo(Request $request)
    {
        $user = auth()->user();

        $user->livros()->attach([
            'livro_id' => $request->livroId
        ]);

        return redirect()->to('livros');
    }

    public function devolverEmprestimo(Request $request)
    {
        $user = auth()->user();

        $user->livros()->detach([
            'livro_id' => $request->livroId
        ]);

        return redirect()->to('livros');
    }

    public function delete($id)
    {
        Livro::findOrFail($id)->delete();

        return redirect()->to('livros');
    }
}
