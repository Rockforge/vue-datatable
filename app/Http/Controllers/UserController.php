<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   /**
    * undocumented function
    *
    * @return void
    */
   public function index(Request $request)
   {
        $columns = ['name', 'email', 'role'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = User::select('id', 'name', 'email', 'role')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                ->orWhere('email', 'like', '%' . $searchValue . '%');
            });
        }

        $users = $query->paginate($length);
        return ['data' => $users, 'draw' => $request->input('draw')];
   }


}
