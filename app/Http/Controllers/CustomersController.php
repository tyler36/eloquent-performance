<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Auth::login(User::whereName('Dr. Melody Friesen Jr.')->first());
        Auth::login(User::find(1));

        $customers = Customer::query()
            ->with('user')
            ->visibleTo(Auth::user())
            ->paginate(10);

        return view('customers.index', ['customers' => $customers]);
    }
}
