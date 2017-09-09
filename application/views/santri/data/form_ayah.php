<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->auth->validation();

$title = 'Data Ayah Santri';
$controller = 'dataSantri';
$data = array(
    array(
        'type' => 'number',
        'field' => 'AYAH_NIK_SANTRI',
        'label' => 'NIK Ayah'
    ),
    array(
        'type' => 'text',
        'field' => 'AYAH_NAMA_SANTRI',
        'label' => 'Nama Ayah'
    ),
    array(
        'type' => 'select',
        'field' => 'AYAH_HIDUP_SANTRI',
        'label' => 'Status Ayah'
    ),
    array(
        'type' => 'text',
        'field' => 'AYAH_TEMPAT_LAHIR_SANTRI',
        'label' => 'Tempat Lahir Ayah'
    ),
    array(
        'type' => 'date',
        'field' => 'AYAH_TANGGAL_LAHIR_SANTRI',
        'label' => 'Tanggal Lahir Ayah'
    ),
    array(
        'type' => 'select',
        'field' => 'AYAH_PENDIDIKAN_SANTRI',
        'label' => 'Pendidikan Ayah'
    ),
    array(
        'type' => 'select',
        'field' => 'AYAH_PEKERJAAN_SANTRI',
        'label' => 'Pekerjaan Ayah'
    ),
);

$this->output_handler->dialog_form($title, $controller, $data);

?>