<?php

namespace App\Http\Controllers;

use App\Task;
use Faker\Factory;
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

        $all = $this->task->read()->in('tasks')->get();
        $all = collect($all);

        return view('todo.index', compact('all'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Criar nova tarefa.';
        return view('todo.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ];
        $messages = [];
        $data = $request->except('_token');

        $validation = \Validator::make($data, $rules, $messages);

        if ($validation->fails()) {
            $msgs = $validation->messages();
            return redirect()->route('todo.create')->withErrors($msgs)->withInput($data);
        } else {
            $this->task->insert()->in('tasks')->set($data)->execute();

            return redirect()->route('todo.index')->with('success', 'Tarefa criada com sucesso!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
