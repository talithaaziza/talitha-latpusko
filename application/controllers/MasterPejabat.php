<?php
class MasterPejabat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_MasterPejabat');
    }

    public function index() {
        $data['pejabat'] = $this->M_MasterPejabat->getAllPejabat();
        $this->load->view('master/pejabat_list', $data);
    }

    public function create() {
        $this->load->view('master/pejabat_create');
    }

    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
        );
        $this->M_MasterPejabat->insertPejabat($data);
        redirect('MasterPejabat');
    }

    public function edit($id) {
        $data['pejabat'] = $this->M_MasterPejabat->getPejabatById($id);
        $this->load->view('master/pejabat_edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
        );
        $this->M_MasterPejabat->updatePejabat($id, $data);
        redirect('MasterPejabat');
    }

    public function delete($id) {
        $this->M_MasterPejabat->deletePejabat($id);
        redirect('MasterPejabat');
    }
}
?>
