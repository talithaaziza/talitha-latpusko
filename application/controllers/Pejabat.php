<?php
class Pejabat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Pejabat');
        // $this->load->model('M_MasterPejabat');

    }

    public function index() {
        $this->load->model('M_Pejabat');
        $data['pejabat'] = $this->M_Pejabat->getAllPejabat();
        $this->load->view('pejabat/index', $data);

    }

    public function create() {
        $this->load->model('M_MasterPejabat');
        $data['pejabat_options'] = $this->M_MasterPejabat->get_pejabat_options();
        $this->load->view('pejabat/create', $data);
    }

    public function store() {
        $data = array(
            'nama_pejabat' => $this->input->post('nama_pejabat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'm_pejabat_id' => $this->input->post('m_pejabat_id'),
        );
        $this->M_Pejabat->insertPejabat($data);
        redirect('Pejabat');
    }

    public function edit($id) {
        $data['pejabat'] = $this->M_Pejabat->getPejabatById($id);
        $this->load->model('M_MasterPejabat');
        $data['pejabat_options'] = $this->M_MasterPejabat->get_pejabat_options();
        $this->load->view('pejabat/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama_pejabat' => $this->input->post('nama_pejabat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'm_pejabat_id' => $this->input->post('m_pejabat_id'),
        );
        $this->M_Pejabat->updatePejabat($id, $data);
        redirect('Pejabat');
    }

    public function delete($id) {
        $this->M_Pejabat->deletePejabat($id);
        redirect('Pejabat');
    }
}
?>
