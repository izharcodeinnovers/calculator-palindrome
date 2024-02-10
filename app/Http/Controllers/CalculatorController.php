<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator()
    {
        return view('calculator');
    }

    public function saveCalculator(Request $request)
    {
//        dd($request->all());
        $firstnumber  = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');
        $operator     = $request->input('operator');
        $result = 0;

        if($operator == 'Select Operator')
        {
            $result = "Please Select The Operator";
        }
        elseif ($operator == '+')
        {
        $result = $firstnumber + $secondnumber;
        }
        elseif ($operator == '-')
        {
            $result = $firstnumber - $secondnumber;
        }
        elseif($operator == '*')
        {
            $result = $firstnumber * $secondnumber;
        }
        elseif ($operator == '/')
        {
            $result = $firstnumber / $secondnumber;
        }
        else
        {
            $result = 0;
        }
        //echo $result;
        return redirect('/')->with('message','answer is:'.$result);
    }

    public function reverseString()
    {
        $string = '12321';
        $stringLength = strlen($string);
        $rev = [];
        for ($i = $stringLength-1 ; $i >= 0 ; $i--)
        {
           $rev[] =  $string[$i];
        }
        $revvalue = implode(',', $rev);
        $finalValue= str_replace(',', '', $revvalue);
        return $finalValue;
    }


    public  function palindrome()

    {
        $value = $this->reverseString();
        if ( $value == $string){
            echo "this is palindrom number";
        }else{
            echo "false";
        }
    }

}

