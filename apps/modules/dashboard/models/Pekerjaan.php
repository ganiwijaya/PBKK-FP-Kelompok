<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;
use Phalcon\Init\Dashboard\Models\Logs;

class Mahasiswa extends Model
{
	public function initialize()
    {
        $this->setSource('mahasiswa');
    }
    
    public $id_pek;
    public $judul;
    public $posisi;
    public $keterangan;
    public $status;
    public $id_per;

    // public function gen_uuid() {
    //     return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    //         mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

    //         mt_rand( 0, 0xffff ),

    //         mt_rand( 0, 0x0fff ) | 0x4000,

    //         mt_rand( 0, 0x3fff ) | 0x8000,

    //         mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    //     );
    // }

    // public function beforeCreate()
    // {
    //     $this->id = $this->gen_uuid();
    // }

    public function afterCreate()
    {
        $log = new Logs();
        $log->activity = 'Create User';
        $log->timestamp = date('Y-m-d H:i:s');
        $log->save();
    }

    // public function afterFetch()
    // {
    //     $this->email = str_replace('@', '-at-', $this->email);
    // }

}