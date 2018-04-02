<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index()
    {
        //$todos=Todo::all();
        $todos=Todo::where('userId',Auth::user()->id)->orderBy('created_at','desc')->get();

        return view('todos')->with('todos',$todos);
    }
    public function create(Request $request)
    {
       //dd( $request->all());
        $this->validate($request,[
            'todo'=>'required'
        ]);
        $todo= new Todo;
        $todo->userId=Auth::user()->id;
        $todo->todo=$request->todo;
        $todo->save();

        Session::flash('success','Your Todo Created');
        return redirect()->back();   
    }

    public function delete($id)
    {
        //dd($id);
        $todo= Todo::find($id);
        $todo->delete();

        Session::flash('success','Your Todo Deleted');
        return redirect()->back();
    }

    public function update($id)
    {
        //dd($id);
        
        $todo=Todo::find($id);
        Session::flash('info','Now you can update your Todo');
        return view('update')->with('todo',$todo);  
    }
    public function save(Request $request, $id)
    {
        $this->validate($request,[
            'todo'=>'required'
        ]);
       //dd($id);
        $todo=Todo::find($id);
        $todo->todo=$request->todo;
        $todo->save();

        Session::flash('success','Your Todo Updated');
        return redirect(route('todos'));
    }

    public function completed($id)
    {
        $todo = Todo::find($id);
        $todo->completed=1;
        $todo->save();

        Session::flash('success','Your Todo marked as completed');
        return redirect()->back();
    }

    public function mark($id)
    {
        $todo = Todo::find($id);
        $todo->completed=0;
        $todo->save();

        Session::flash('success','Your Todo marked as uncompleted again');
        return redirect()->back();
    }
    
}
