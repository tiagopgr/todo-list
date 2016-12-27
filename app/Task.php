<?php

namespace App;

use Flatbase\Storage\Filesystem;
use Flatbase\Flatbase as Flatbase;
use \File;

Class Task  extends Flatbase{

    public $storage;
    public $flatbase;
    protected $table = 'tasks';

    function __construct()
    {
        $diretorio = storage_path('database');
        if(!File::exists($diretorio))
        {
            File::makeDirectory($diretorio);
        }
        $this->storage = new Filesystem($diretorio);
        $this->flatbase = new Flatbase($this->storage);
    }

    public function getLastId(){

        $this->flatbase->delete()->in($this->table)->execute();

        $q = $this->flatbase->read()->in($this->table)->get();

        $q = collect($q);
        //$q = $q->max('id');

        return $q;

        if(empty($q) || count($q) == 0)
        {
            $id = 1;
        }

        //return (int) $id;

        return $q;
    }

}