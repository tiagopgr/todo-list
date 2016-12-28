<?php

namespace App;

use Flatbase\Storage\Filesystem;
use Flatbase\Flatbase as Flatbase;
use \File;

Class Task extends Flatbase
{

    public $storage;
    public $flatbase;
    protected $table = 'tasks';

    function __construct()
    {
        $diretorio = storage_path('database');
        if (!File::exists($diretorio)) {
            File::makeDirectory($diretorio);
        }
        $this->storage = new Filesystem($diretorio);
        $this->flatbase = new Flatbase($this->storage);
    }

    public function getLastId()
    {
        $id = 1;
        $q = $this->flatbase->read()->in($this->table)->get();
        if($q->count() > 0){
            $q = collect($q);
            $id = $q->max('id');
            ++$id;
        }
        return $id;
    }

}