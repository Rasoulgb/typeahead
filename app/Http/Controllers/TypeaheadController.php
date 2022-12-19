<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bank;

class TypeaheadController extends Controller
{
    //

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');

          $filterResult = Bank::where('name', 'LIKE', '%'. $query. '%')->get();
       //   $filterResult = Bank::where('address', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 
}
