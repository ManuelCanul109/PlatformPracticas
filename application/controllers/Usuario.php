<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Usuario
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

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    public function index()
    {
        //
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password_usuario', 'Contraseña', 'required');
        $this->form_validation->set_rules('password_usuario2', 'Repetir Contraseña', 'required|matches[password_usuario]');
        $this->form_validation->set_rules('correo_usuario', 'Correo Usuario', 'required|valid_email|is_unique[usuarios.correo_usuario]');

        if ($this->form_validation->run()) {
            $params = array(
                'password_usuario' => base64_encode(trim($this->input->post('password_usuario'))),
                'correo_usuario' => $this->input->post('correo_usuario'),
                'tipo_usuario' => 1,
            );

            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('Login');
        } else {
            $this->load->view('RegistroView');
        }
    }

}

/* End of file Usuario.php */
/* Location: ./application/controllers/Usuario.php */
