<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Export
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

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Solicitud_model');
        $this->load->model('Carrera_model');
        $this->load->model('Semestre_model');
    }

    public function realizarinformedetodos()
    {
        $estado_solicitud_values = array(
            '1' => 'Solicitado',
            '2' => 'En Curso',
            '3' => 'Finalizado',
            '4' => 'Cancelado',
        );

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        /*set column names*/
        $table_columns = array("id_solicitud", "nombres_alumno_solicitud", "apellidos_alumno_solicitud",
            "matricula_solicitud", "carrera_id", "semestre_id", "nombre_empresa_solicitud",
            "nombre_dirigido_solicitud", "puesto_solicitud", "horario_solicitud", "conocimiento_solicitud",
            "nombre_proyecto_solicitud", "descripcion_solicitud", "nombre_jefe_solicitud", "cargo_jefe_solicitud",
            "celular_alumno_solicitud", "correo_alumno_solicitud", "fecha_inicio_soliciud", "fecha_final_solicitud",
            "fecha_alta_solicitud", "estado_solicitud",
        );

        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }
        /*end set column names*/
        $bill_data = $this->Solicitud_model->traerInformeTodos(); //get your data from model

        $excel_row = 2; //now from row 2

        foreach ($bill_data as $row) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['id_solicitud']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['nombres_alumno_solicitud']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['apellidos_alumno_solicitud']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['matricula_solicitud']);

            foreach ($this->Carrera_model->get_all_carreras() as $carrera) {
                if ($carrera['id_carrera'] == $row['carrera_id']) {
                    $sheet->setCellValueByColumnAndRow(5, $excel_row, $carrera['nombre_carrera']);
                }
            }

            $sheet->setCellValueByColumnAndRow(6, $excel_row, $row['semestre_id']);
            $sheet->setCellValueByColumnAndRow(7, $excel_row, $row['nombre_empresa_solicitud']);
            $sheet->setCellValueByColumnAndRow(8, $excel_row, $row['nombre_dirigido_solicitud']);
            $sheet->setCellValueByColumnAndRow(9, $excel_row, $row['puesto_solicitud']);
            $sheet->setCellValueByColumnAndRow(10, $excel_row, $row['horario_solicitud']);
            $sheet->setCellValueByColumnAndRow(11, $excel_row, $row['conocimiento_solicitud']);
            $sheet->setCellValueByColumnAndRow(12, $excel_row, $row['nombre_proyecto_solicitud']);
            $sheet->setCellValueByColumnAndRow(13, $excel_row, $row['descripcion_solicitud']);
            $sheet->setCellValueByColumnAndRow(14, $excel_row, $row['nombre_jefe_solicitud']);
            $sheet->setCellValueByColumnAndRow(15, $excel_row, $row['cargo_jefe_solicitud']);
            $sheet->setCellValueByColumnAndRow(16, $excel_row, $row['celular_alumno_solicitud']);
            $sheet->setCellValueByColumnAndRow(17, $excel_row, $row['correo_alumno_solicitud']);
            $sheet->setCellValueByColumnAndRow(18, $excel_row, $row['fecha_inicio_soliciud']);
            $sheet->setCellValueByColumnAndRow(19, $excel_row, $row['fecha_final_solicitud']);
            $sheet->setCellValueByColumnAndRow(20, $excel_row, $row['fecha_alta_solicitud']);

            foreach ($estado_solicitud_values as $value => $display_text) {
                if ($value == $row['estado_solicitud']) {
                    $sheet->setCellValueByColumnAndRow(21, $excel_row, $display_text);
                }
            }
            $excel_row++;
        }
        $object_writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="informe_todos.xls"');
        $object_writer->save('php://output');
    }

    public function realizarinformeporcarrera()
    {
        $estado_solicitud_values = array(
            '1' => 'Solicitado',
            '2' => 'En Curso',
            '3' => 'Finalizado',
            '4' => 'Cancelado',
        );

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        /*set column names*/
        $table_columns = array("id_solicitud", "nombres_alumno_solicitud", "apellidos_alumno_solicitud",
            "matricula_solicitud", "carrera_id", "semestre_id", "nombre_empresa_solicitud",
            "nombre_dirigido_solicitud", "puesto_solicitud", "horario_solicitud", "conocimiento_solicitud",
            "nombre_proyecto_solicitud", "descripcion_solicitud", "nombre_jefe_solicitud", "cargo_jefe_solicitud",
            "celular_alumno_solicitud", "correo_alumno_solicitud", "fecha_inicio_soliciud", "fecha_final_solicitud",
            "fecha_alta_solicitud", "estado_solicitud",
        );

        $excel_row = 1;

        foreach ($this->Carrera_model->get_all_carreras() as $carrera) {

             //now from row 2
            $column = 1;
            //CREAMOS EL TITULO
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $carrera['nombre_carrera']);
            $excel_row++;
            foreach ($table_columns as $field) {
                $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
                $column++;
            }

            $excel_row++;
            /*end set column names*/
            $bill_data = $this->Solicitud_model->traerInformePorCarrera($carrera['id_carrera']); //get your data from model

            foreach ($bill_data as $row) {
                $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['id_solicitud']);
                $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['nombres_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['apellidos_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['matricula_solicitud']);

                foreach ($this->Carrera_model->get_all_carreras() as $carrera) {
                    if ($carrera['id_carrera'] == $row['carrera_id']) {
                        $sheet->setCellValueByColumnAndRow(5, $excel_row, $carrera['nombre_carrera']);
                    }
                }

                $sheet->setCellValueByColumnAndRow(6, $excel_row, $row['semestre_id']);
                $sheet->setCellValueByColumnAndRow(7, $excel_row, $row['nombre_empresa_solicitud']);
                $sheet->setCellValueByColumnAndRow(8, $excel_row, $row['nombre_dirigido_solicitud']);
                $sheet->setCellValueByColumnAndRow(9, $excel_row, $row['puesto_solicitud']);
                $sheet->setCellValueByColumnAndRow(10, $excel_row, $row['horario_solicitud']);
                $sheet->setCellValueByColumnAndRow(11, $excel_row, $row['conocimiento_solicitud']);
                $sheet->setCellValueByColumnAndRow(12, $excel_row, $row['nombre_proyecto_solicitud']);
                $sheet->setCellValueByColumnAndRow(13, $excel_row, $row['descripcion_solicitud']);
                $sheet->setCellValueByColumnAndRow(14, $excel_row, $row['nombre_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(15, $excel_row, $row['cargo_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(16, $excel_row, $row['celular_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(17, $excel_row, $row['correo_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(18, $excel_row, $row['fecha_inicio_soliciud']);
                $sheet->setCellValueByColumnAndRow(19, $excel_row, $row['fecha_final_solicitud']);
                $sheet->setCellValueByColumnAndRow(20, $excel_row, $row['fecha_alta_solicitud']);

                foreach ($estado_solicitud_values as $value => $display_text) {
                    if ($value == $row['estado_solicitud']) {
                        $sheet->setCellValueByColumnAndRow(21, $excel_row, $display_text);
                    }
                }
                $excel_row++;
            }
            $excel_row++;
            $excel_row++;
        }

        $object_writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="informeporcarrera.xls"');
        $object_writer->save('php://output');
    }

    public function realizarinformeporsemestre()
    {
        $estado_solicitud_values = array(
            '1' => 'Solicitado',
            '2' => 'En Curso',
            '3' => 'Finalizado',
            '4' => 'Cancelado',
        );

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        /*set column names*/
        $table_columns = array("id_solicitud", "nombres_alumno_solicitud", "apellidos_alumno_solicitud",
            "matricula_solicitud", "carrera_id", "semestre_id", "nombre_empresa_solicitud",
            "nombre_dirigido_solicitud", "puesto_solicitud", "horario_solicitud", "conocimiento_solicitud",
            "nombre_proyecto_solicitud", "descripcion_solicitud", "nombre_jefe_solicitud", "cargo_jefe_solicitud",
            "celular_alumno_solicitud", "correo_alumno_solicitud", "fecha_inicio_soliciud", "fecha_final_solicitud",
            "fecha_alta_solicitud", "estado_solicitud",
        );

        $excel_row = 1;

        foreach ($this->Semestre_model->get_all_semestres() as $semestre) {

             //now from row 2
            $column = 1;
            //CREAMOS EL TITULO
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $semestre['nombre_semestre']);
            $excel_row++;
            foreach ($table_columns as $field) {
                $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
                $column++;
            }

            $excel_row++;
            /*end set column names*/
            $bill_data = $this->Solicitud_model->traerInformePorSemestre($semestre['id_semestre']); //get your data from model

            foreach ($bill_data as $row) {
                $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['id_solicitud']);
                $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['nombres_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['apellidos_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['matricula_solicitud']);

                foreach ($this->Carrera_model->get_all_carreras() as $carrera) {
                    if ($carrera['id_carrera'] == $row['carrera_id']) {
                        $sheet->setCellValueByColumnAndRow(5, $excel_row, $carrera['nombre_carrera']);
                    }
                }

                $sheet->setCellValueByColumnAndRow(6, $excel_row, $row['semestre_id']);
                $sheet->setCellValueByColumnAndRow(7, $excel_row, $row['nombre_empresa_solicitud']);
                $sheet->setCellValueByColumnAndRow(8, $excel_row, $row['nombre_dirigido_solicitud']);
                $sheet->setCellValueByColumnAndRow(9, $excel_row, $row['puesto_solicitud']);
                $sheet->setCellValueByColumnAndRow(10, $excel_row, $row['horario_solicitud']);
                $sheet->setCellValueByColumnAndRow(11, $excel_row, $row['conocimiento_solicitud']);
                $sheet->setCellValueByColumnAndRow(12, $excel_row, $row['nombre_proyecto_solicitud']);
                $sheet->setCellValueByColumnAndRow(13, $excel_row, $row['descripcion_solicitud']);
                $sheet->setCellValueByColumnAndRow(14, $excel_row, $row['nombre_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(15, $excel_row, $row['cargo_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(16, $excel_row, $row['celular_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(17, $excel_row, $row['correo_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(18, $excel_row, $row['fecha_inicio_soliciud']);
                $sheet->setCellValueByColumnAndRow(19, $excel_row, $row['fecha_final_solicitud']);
                $sheet->setCellValueByColumnAndRow(20, $excel_row, $row['fecha_alta_solicitud']);

                foreach ($estado_solicitud_values as $value => $display_text) {
                    if ($value == $row['estado_solicitud']) {
                        $sheet->setCellValueByColumnAndRow(21, $excel_row, $display_text);
                    }
                }
                $excel_row++;
            }
            $excel_row++;
            $excel_row++;
        }

        $object_writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="informeporsemestre.xls"');
        $object_writer->save('php://output');
    }

    public function realizarinformeporetapa()
    {
        $estado_solicitud_values = array(
            '1' => 'Solicitado',
            '2' => 'En Curso',
            '3' => 'Finalizado',
            '4' => 'Cancelado',
        );

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        /*set column names*/
        $table_columns = array("id_solicitud", "nombres_alumno_solicitud", "apellidos_alumno_solicitud",
            "matricula_solicitud", "carrera_id", "semestre_id", "nombre_empresa_solicitud",
            "nombre_dirigido_solicitud", "puesto_solicitud", "horario_solicitud", "conocimiento_solicitud",
            "nombre_proyecto_solicitud", "descripcion_solicitud", "nombre_jefe_solicitud", "cargo_jefe_solicitud",
            "celular_alumno_solicitud", "correo_alumno_solicitud", "fecha_inicio_soliciud", "fecha_final_solicitud",
            "fecha_alta_solicitud", "estado_solicitud",
        );

        $excel_row = 1;

        foreach ($estado_solicitud_values as $estado => $display_text) {

             //now from row 2
            $column = 1;
            //CREAMOS EL TITULO
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $display_text);
            $excel_row++;
            foreach ($table_columns as $field) {
                $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
                $column++;
            }

            $excel_row++;
            /*end set column names*/
            $bill_data = $this->Solicitud_model->traerInformePorEtapa($estado); //get your data from model

            foreach ($bill_data as $row) {
                $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['id_solicitud']);
                $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['nombres_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['apellidos_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['matricula_solicitud']);

                foreach ($this->Carrera_model->get_all_carreras() as $carrera) {
                    if ($carrera['id_carrera'] == $row['carrera_id']) {
                        $sheet->setCellValueByColumnAndRow(5, $excel_row, $carrera['nombre_carrera']);
                    }
                }

                $sheet->setCellValueByColumnAndRow(6, $excel_row, $row['semestre_id']);
                $sheet->setCellValueByColumnAndRow(7, $excel_row, $row['nombre_empresa_solicitud']);
                $sheet->setCellValueByColumnAndRow(8, $excel_row, $row['nombre_dirigido_solicitud']);
                $sheet->setCellValueByColumnAndRow(9, $excel_row, $row['puesto_solicitud']);
                $sheet->setCellValueByColumnAndRow(10, $excel_row, $row['horario_solicitud']);
                $sheet->setCellValueByColumnAndRow(11, $excel_row, $row['conocimiento_solicitud']);
                $sheet->setCellValueByColumnAndRow(12, $excel_row, $row['nombre_proyecto_solicitud']);
                $sheet->setCellValueByColumnAndRow(13, $excel_row, $row['descripcion_solicitud']);
                $sheet->setCellValueByColumnAndRow(14, $excel_row, $row['nombre_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(15, $excel_row, $row['cargo_jefe_solicitud']);
                $sheet->setCellValueByColumnAndRow(16, $excel_row, $row['celular_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(17, $excel_row, $row['correo_alumno_solicitud']);
                $sheet->setCellValueByColumnAndRow(18, $excel_row, $row['fecha_inicio_soliciud']);
                $sheet->setCellValueByColumnAndRow(19, $excel_row, $row['fecha_final_solicitud']);
                $sheet->setCellValueByColumnAndRow(20, $excel_row, $row['fecha_alta_solicitud']);

                foreach ($estado_solicitud_values as $value => $display_text) {
                    if ($value == $row['estado_solicitud']) {
                        $sheet->setCellValueByColumnAndRow(21, $excel_row, $display_text);
                    }
                }
                $excel_row++;
            }
            $excel_row++;
            $excel_row++;
        }

        $object_writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="informeporetapas.xls"');
        $object_writer->save('php://output');
    }

}

/* End of file Export.php */
/* Location: ./application/controllers/Export.php */
