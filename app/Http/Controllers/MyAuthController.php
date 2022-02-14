<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function registration()
    {
        $countries = Country::all();
        // print_r($countries->toArray());
        return view('auth.registration', ["countries" => $countries]);
    }
      
    public function submitRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|min:5',
            'birth_date' => 'required|date|before:-18 years',
            'country' => 'required|exists:countries,id'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("list")->withSuccess('Successful registration');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'birth_date' => $data['birth_date'],
        'country_id' => $data['country']
      ]);
    }

    public function list()
    {
        // print_r(Carbon::now()->subMinutes(5)->toDateTimeString());
        $users = User::where('users.created_at', '>', Carbon::now()->subMinutes(5)->toDateTimeString())
        ->with('country')->get()->toArray();
        return view('auth.list', ["users" => $users]);
    }

}
