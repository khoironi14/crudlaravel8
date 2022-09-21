<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $task=Task::get();
            return view('view_task',['task'=>$task]);
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::get();
        return view('add-task',['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator=$request->validate([
            'name_task'=>['required'],
            'user_id'=>['required'],
            'deadline'=>['required']

        ]);

        try {
            Task::create($validator);
            return redirect('/task')->with('message','New Task has been added');

        } catch (QueryException $th) {
            //throw $th;
        }
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
        $user=User::get();
        $edit=Task::find($id);
        return view('edit-task',['edit'=>$edit,'user'=>$user]);
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
        $validator=$request->validate([
            'name_task'=>['required'],
            'user_id'=>['required'],
            'deadline'=>['required']

        ]);
        try {
            Task::where('id',$id)
            ->update($validator);
            return redirect('/task')->with('message','New Task has been updated');
        } catch (QueryException $th) {
            //throw $th;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('/task')->with('message','New Task has been deleted');
    }
}
