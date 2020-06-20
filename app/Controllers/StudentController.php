<?php namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentController extends Controller
{

    public function index()
    {
        $model = new StudentModel();

        $data['students_detail'] = $model->orderBy('id', 'DESC')->findAll();

        return view('list', $data);
    }

    public function create()
    {
        return view('add');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new StudentModel();

        if (isset($model)) {
            $data = [
                'first_name' => $this->request->getVar('txtFname'),
                'last_name' => $this->request->getVar('txtLname'),
                'address' => $this->request->getVar('txtAddress'),
                'email' => $this->request->getVar('txtEmail'),
                'mobile' => $this->request->getVar('txtMobile'),
            ];

        }
        $save = $model->insert($data);

        return redirect()->to(base_url('/'));

    }

    public function edit($id = null)
    {

        $model = new StudentModel();

        $data['student'] = $model->where('id', $id)->first();

        return view('edit', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new StudentModel();

        $id = $this->request->getVar('id');

        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name' => $this->request->getVar('txtLname'),
            'address' => $this->request->getVar('txtAddress'),
            'email' => $this->request->getVar('txtEmail'),
            'mobile' => $this->request->getVar('txtMobile'),
        ];

        $save = $model->update($id, $data);
        return redirect()->to(base_url('/'));

    }

    public function delete($id = null)
    {
        $model = new StudentModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to(base_url('/'));
    }
}
