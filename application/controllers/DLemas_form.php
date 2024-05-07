<?php
class DLemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('header_DLemas');
        $this->load->view('form_DLemas');
        $this->load->view('footer_DLemas');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', ['required' => 'Nama Harus diisi', 'min_lenght' => 'Nama terlalu pendek']);
        $this->form_validation->set_rules('nis', 'nis', 'required|min_length[3]', ['required' => 'NIS Harus diisi', 'min_lenght' => 'NIS terlalu pendek']);
        $this->form_validation->set_rules('kelas', 'kelas', 'required|min_length[1]', ['required' => 'Kelas Harus diisi', 'min_lenght' => 'Kelas terlalu pendek']);
        $this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'required|min_length[4]', ['required' => 'Tanggal Lahir Harus diisi tt-bb-tt', 'min_lenght' => 'Tanggal Lahir Tidak Lengkap']);
        $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'required|min_length[3]', ['required' => 'Tempat Lahir Harus diisi', 'min_lenght' => 'Tempat Lahir terlalu pendek']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]', ['required' => 'Alamat Harus diisi', 'min_lenght' => 'Alamat terlalu pendek']);

        if ($this->form_validation->run() != true) {
            $this->load->view('header_DLemas');
            $this->load->view('form_DLemas');
            $this->load->view('footer_DLemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('header_DLemas');
            $this->load->view('DLemas_tampildata', $data);
            $this->load->view('footer_DLemas');
        }
    }
}
