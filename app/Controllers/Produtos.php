<?php
namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\HTTP\RedirectResponse;

class Produtos extends BaseController
{
    public function index()
    {
        $model = new ProdutoModel();
        $data['produtos'] = $model->findAll();
        return view('produtos/index', $data);
    }

    public function create()
    {
        return view('produtos/create');
    }

    public function store()
    {
        $model = new ProdutoModel();
        $model->save([
            'nome' => $this->request->getPost('nome'),
            'categoria' => $this->request->getPost('categoria'),
            'preco' => $this->request->getPost('preco'),
        ]);
        return redirect()->to('/produtos');
    }

    public function edit($id)
    {
        $model = new ProdutoModel();
        $data['produto'] = $model->find($id);
        return view('produtos/edit', $data);
    }

    public function update($id)
    {
        $model = new ProdutoModel();
        $model->update($id, [
            'nome' => $this->request->getPost('nome'),
            'categoria' => $this->request->getPost('categoria'),
            'preco' => $this->request->getPost('preco'),
        ]);
        return redirect()->to('/produtos');
    }

    public function delete($id)
    {
        $model = new ProdutoModel();
        $model->delete($id);
        return redirect()->to('/produtos');
    }
}
