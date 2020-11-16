<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Login_model
 *
 * This Model for ...
 *
 * @package        CodeIgniter
 * @category    Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------

    // ------------------------------------------------------------------------
    public function index()
    {
        //
    }

    public function processLogin($userName = null, $password)
    {
        $this->db->select("*");
        $whereCondition = $array = array('correo_usuario' => $userName, 'password_usuario' => $password);
        $this->db->where($whereCondition);
        $this->db->from('usuarios');
        $query = $this->db->get();
        return $query;
    }

    // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
