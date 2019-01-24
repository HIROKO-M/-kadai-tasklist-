<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tasklist;   // Add for kadai

class TasklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasklist::all();
        
        return view('tasklists.index', [ 'jobs' => $tasks ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = new Tasklist;
        
        return view('tasklists.create', ['job' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [                 // add for kadai2
                'status' => 'required|max:10',
                'content' => 'required|max:255',    // add
        ]);
        
    /*
        $tasks = new Tasklist;
        $tasks -> status = $request -> status;      // add for kadai2
        $tasks -> content = $request -> content;
        $tasks -> save();
    */
        // add
        $request->user()->tasklists()->create([
            'status' => $request->status,
            'content' => $request->content,
        ]);
        
        return redirect('/tasklists');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $tasks = Tasklist::find($id);

        return view('tasklists.show', [ 'job' => $tasks, ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Tasklist::find($id);
        
        return view('tasklists.edit', ['job' => $tasks,]);
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
        $this->validate($request, [                 // add for kadai2
                'status' => 'required|max:10',
                'content' => 'required|max:255',    // add
        ]);
        
    /*
        $tasks = Tasklist::find($id);
        $tasks -> status = $request -> status;      // add for kadai2
        $tasks -> content = $request -> content;
        $tasks -> save();
    */    
        // add
        $request->user()->tasklists()->find($id)->update([
            'status' => $request->status,
            'content' => $request->content,
        ]);
        
        return redirect('/tasklists');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = \App\Tasklist::find($id);
        
        if(\Auth::user()-id === $tasklist->user_id){
            $tasks -> delete();
        }
        
        return redirect('/tasklists');
        
    }
}
