<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;

class WrongController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// Example : Avoid unused local variables
        $dataUser = "just test";

        // Example : Avoid variables with short names
        // except : id,i,j,e,fp
        $a = 1;
        $testSum = 3;
        $total = $a + $testSum;

        return view('index', [
            "total" => $total,
        ]);
    }

    /**
     * Function to calculate something.
     *
     * @param object $dataUsers
     *
     * @return \Illuminate\Http\Response
     */
    public function calculateSomething($dataUsers)
    {
    	// Example : Avoid assigning values to variables in if clauses
		if (($dataUsers = $this->foo()) === null) {
		    // ...
		}
    }

}
