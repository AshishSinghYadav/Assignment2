<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SumController extends Controller
{
function get()
{
    return view('');
}
function add(Request $request)
{
    $first=$request->input('first');
    $second=$request->input('second');
    $addno=(int)$request->input('first')+(int)$request->input('second');
    echo $addno;
}  
function resumeform(Request $request)
{
    $Name=$request->input('Name');
    $RegNo=$request->input('Registration');
    $CGPA=$request->input('CGPA');
    $Special=$request->input('specialization');
    $resume=$request->input('resume');

    echo 'Name:', $Name .'<br>';
    echo 'Registration no:', $RegNo .'<br>';
    echo "CGPA:", $CGPA .'<br>';
    echo "Specialization:", $Special .'<br>';
    echo $resume;
    
}  

}