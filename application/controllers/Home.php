<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Home
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->library('pagination');
        $this->load->helper('url_helper');
        $this->load->model('Solicitud_model');
        if ($this->session->userdata('logged_in') !== true) {
            redirect('Login');
        }
    }

    public function index()
    {
        if($this->session->userdata('tipo_usuario') == 0){
            //inflamos admin
            $data = array(
                'title' => 'Home Admin',
                'estoyenadmin' => true,
                'SO' => $this->Solicitud_model->contarEstados(1),
                'EC' => $this->Solicitud_model->contarEstados(2),
                'FI' => $this->Solicitud_model->contarEstados(3),
                'CA' => $this->Solicitud_model->contarEstados(4)
            );
    
            $this->template->load('dashboard', 'Home/inicioadmin', $data);
        }else{
            //inflamos alumno
            $data = array(
                'title' => 'Home Alumno',
            );
    
            $this->template->load('dashboard', 'Home/inicioalumno', $data);
        }
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
