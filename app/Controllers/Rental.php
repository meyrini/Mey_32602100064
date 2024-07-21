<?php

namespace App\Controllers;

use App\Models\RentalModel;

class Rental extends BaseController
{
    public function index()
    {
        $model = new RentalModel();
        $data['rentals'] = $model->findAll();
        return view('rental_view', $data);
    }

    public function create()
    {
        return view('rental_create');
    }

    public function store()
    {
        $model = new RentalModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        $model->save($data);

        return redirect()->to('/rental');
    }

    public function edit($id = null)
    {
        $model = new RentalModel();
        $data['rental'] = $model->find($id);
        return view('rental_edit', $data);
    }

    public function update()
    {
        $model = new RentalModel();

        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        $model->update($id, $data);

        return redirect()->to('/rental');
    }

    public function delete($id = null)
    {
        $model = new RentalModel();
        $model->delete($id);
        return redirect()->to('/rental');
    }
}
