<?php

namespace App\Http\Controllers;


use App\Person;
use Illuminate\Http\Request;


class MyController extends Controller
{
    
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $person = new Person();
            $person->name = $request->input('name');
            $person->email = $request->input('email');
            $person->phone = $request->input('phone');
            $person->address = $request->input('address');
            $person->age = $request->input('age');
            $person->pass = $request->input('pass');
            $person->save();
            return $person;
        }
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $email = $request->input('email');
            $pass  = $request->input('pass');
            $row   = Person::where('email', $email)->where('pass', $pass)->first();
            if ($row) {
                return($row);
            }
            else { 
                echo "wrong email or password";
            }
        }
    }
    public function edit(Request $request,$id)
    {
        
            $p = Person::find($id);
            // echo "<form action='$p->id' method='post'>";
            // echo "<input type='text' name='name' style='width: 25%' value='$p->name' ><br>";
            // echo "<input type='text' name='email' style='width: 25%' value='$p->email' ><br>";
            // echo "<input type='text' name='age' style='width: 25%' value='$p->age' ><br>";
            // echo "<input type='text' name='address' style='width: 25%' value='$p->address' ><br>";
            // echo "<input type='text' name='phone' style='width: 25%' value='$p->phone' ><br>";
            // echo "<input type='text' name='pass' style='width: 25%' value='$p->pass' ><br>";
            // echo "<input type='submit'>";
            // echo "</form>";
            
            if($request->isMethod('post')){
                if($request->input('name')){      $p->name = $request->input('name');      }
                if($request->input('email')){     $p->email = $request->input('email');    }
                if($request->input('age')){       $p->age = $request->input('age');        }
                if($request->input('address')){   $p->address = $request->input('address');}
                if($request->input('phone')){     $p->phone = $request->input('phone');    }
                if($request->input('pass')){      $p->pass = $request->input('pass');      }
                $p->save();
           return $p;
            }

        
    }
}
