<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    private $rules = [
        'book_code' => 'required|max_length[20]',
        'title'     => 'required',
        'author'    => 'required',
        'stock'     => 'required|integer',
    ];

    public function index()
    {
        $q     = $this->request->getGet('q');
        $model = new BukuModel();
        if ($q) {
            $model->like('title', $q);
        }
        return view('buku/index', [
            'books' => $model->orderBy('id', 'DESC')->paginate(10),
            'pager' => $model->pager,
            'q'     => $q,
        ]);
    }

    public function tambah()
    {
        return view('buku/form', ['book' => null]);
    }

    public function simpan()
    {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        (new BukuModel())->insert($this->request->getPost());
        return redirect()->to('buku')->with('pesan', 'Buku berhasil ditambahkan');
    }

    public function edit($id)
    {
        $book = (new BukuModel())->find($id);
        return view('buku/form', ['book' => $book]);
    }

    public function update($id)
    {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        (new BukuModel())->update($id, $this->request->getPost());
        return redirect()->to('buku')->with('pesan', 'Buku berhasil diubah');
    }

    public function hapus($id)
    {
        (new BukuModel())->delete($id);
        return redirect()->to('buku')->with('pesan', 'Buku berhasil dihapus');
    }
}
