<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function get_students() {
		static $students = array(0 => "Dauren", 1 => "Talgat", 2 => "Maksat");
		return $students;
	}
	public function get_stdate() {
		static $students = array(0 => "2002-11-01", 1 => "1999-06-12", 2 => "2001-08-09");
		return $students;
	}
    public function get_age() {
        static $students = array(0 => "18", 1 => "21", 2 => "19");
        return $students;
    }
    //
    public function name($id) {
    	$students = $this->get_students();
    	return view("studentname", ["name"=>$students[$id]]);
    }

    public function date_of_birth($id) {
    	$students = $this->get_stdate();
    	return view("studentdate")->with("date",$students[$id]);
    }

    public function age($id) {
        $students = $this->get_age();
        $age = $students[$id];
    	return view("studentage", compact('age'));
    }
}
