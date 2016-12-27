<?php

namespace App\Http\Controllers;

use App\Task;
use \Flatbase\Storage\Filesystem;
use Illuminate\Http\Request;

use App\Http\Requests;


use Carbon\Carbon;

class TaskController extends Controller
{

    protected $task;

    function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return $this->task->getLastId();

        //$this->task->delete()->in('tasks')->execute();

        /*$this->task->insert()->in('tasks')->set([
            'id' => 1,
        ])->execute();

        $this->task->insert()->in('tasks')->set([
            'id' => 2,
        ])->execute();

        $this->task->insert()->in('tasks')->set([
            'id' => 3,
        ])->execute();*/

        //return collect($this->task->read()->in('tasks')->get());

        //return $this->task->getLastId();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
