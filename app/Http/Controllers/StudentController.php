<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function display($id)
    {
    	$name = $this -> get_name();
    	$age = $this -> get_age();
    	$birth =  $this -> get_birth();

        return 
        	'student information:<br>'.'name: '.$name[$id].'<br>age: '.$age[$id].'<br>birth date: '.$birth[$id];
    }

	function get_name(){
		static $name = array(
							0 => 'Alina', 
							1 => 'Rimma',
							2 => 'Zhaniya',
							3 => 'Elina',
							4 => 'Jennie',
							5 => 'Mark',
							6 => 'Aliya'
						);
		return $name;
	}
	 function get_age(){
		static $age = array(
							0 => 21, 
							1 => 19,
							2 => 18,
							3 => 24,
							4 => 35,
							5 => 20,
							6 => 40
						);
		return $age;
	}
	 function get_birth(){
		static $birth = array(
							0 => '08-02-2000', 
							1 => '02-07-2001',
							2 => '23-11-2001',
							3 => '04-08-1996',
							4 => '01-01-1986',
							5 => '04-02-2001',
							6 => '16-09-1980'
						);
		return $birth;
	}
}
