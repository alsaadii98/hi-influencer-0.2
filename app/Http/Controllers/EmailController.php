<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDashboardPage()
    {
        $emails = DB::table('emails')->latest()->paginate(5);
        
        return view('dashboard',['emails'=>$emails]);

        // Example------------------------------------------
        //  return view('dashboard',[
        //      'emails'=>DB::table('emails')->latest()->paginate(4)
        //     ]);
        
    }
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=$this->Validate($request,["email"=>"required | email", "name"=>"required", "info"=>"required", "phone"=>"required | starts_with:07,00964,+964 | max:15"]);
        $data=[
        "name"=>$request->name,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "info"=>$request->info,
        "link"=>$request->link
        ];
        Email::create($data);
        return view('master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
