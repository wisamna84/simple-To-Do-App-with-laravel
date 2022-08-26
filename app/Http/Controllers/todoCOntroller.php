<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;
use Illuminate\Support\Facades\DB;

class todoCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo1=DB::select('select * from todos');
        return view('index',['todo11'=>$todo1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { return view('addtask');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $todo=new todos;
        $todo->taskname=$request->taskname;
        $todo->save();
        return redirect('/');
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
      $task1=DB::select('select * from todos where id = ?', [$id]);
        return view ('edittask',['task11'=>$task1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $task2=todos::find($id);
        $task2->taskname=$request->input('taskname');
        $task2->update();
        return redirect('')->with('Student Updated Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { $deltask=todos::find($id);
        $deltask->delete();
        return redirect('');
        //
    }
}
