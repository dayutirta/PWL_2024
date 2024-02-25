<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 
class WelcomeController extends Controller 
{ 
 public function hello() { 
         return 'Hello World dunia'; 
 } 
 public function greeting(){ 
        return view('blog.hello') 
                    ->with('name','Dayutirta') 
                    ->with('occupation','Astronaut'); 
            } 
}