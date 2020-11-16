<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Semestre_model
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

class Semestre_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Get semestre by id_semestre
     */
    public function get_semestre($id_semestre)
    {
        return $this->db->get_where('semestres', array('id_semestre' => $id_semestre))->row_array();
    }

    /*
     * Get all semestres
     */
    public function get_all_semestres()
    {
        $this->db->order_by('id_semestre', 'desc');
        return $this->db->get('semestres')->result_array();
    }

    /*
     * function to add new semestre
     */
    public function add_semestre($params)
    {
        $this->db->insert('semestres', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update semestre
     */
    public function update_semestre($id_semestre, $params)
    {
        $this->db->where('id_semestre', $id_semestre);
        return $this->db->update('semestres', $params);
    }

    /*
     * function to delete semestre
     */
    public function delete_semestre($id_semestre)
    {
        return $this->db->delete('semestres', array('id_semestre' => $id_semestre));
    }
}
