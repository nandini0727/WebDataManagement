<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store()
    {

        $this->validate(request(), [
            'password' => 'required',
            'username' => 'required'
        ]);

        if (auth()->attempt(request(['username', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The username or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/homes');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/homes');
    }
}