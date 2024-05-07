
<?php
class dilemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('dilemas_index');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('dilemas_index');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('dilemas_index', $data);
        }
    }
}
