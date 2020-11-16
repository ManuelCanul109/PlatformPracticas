<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Usuario_model
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

class Usuario_model extends CI_Model
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

    public function add_usuario($params)
    {
        $this->db->insert('usuarios', $params);
        return $this->db->insert_id();
    }
    // ------------------------------------------------------------------------

}

/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */
