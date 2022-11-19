<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner; //eloquent
use Illuminate\Support\Facades\DB; //Query Builder
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;




class OwnersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');


    }





    public function index()
    {

        // $date_now=Carbon::now();
        // $date_parse=Carbon::parse(now());

        // echo $date_now->year;
        // echo '<br>';
        // echo $date_parse;


        // echo '<br>';

        // $e_all = Owner::all();
        // $q_get = DB::table('owners')->select('name','created_at')->get();
        // // $q_first = DB::table('owners')->select('name')->first();

        // // $c_test = collect([
        // //     'name' => 'テスト'
        // ]);

        // var_dump($q_first);

        // dd($e_all, $q_get, $q_first, $c_test);


        $owners = Owner::select( 'id', 'name', 'email', 'created_at')-> get();

        return view('admin.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Owner::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect() -> route('admin.owners.index')->with(['message' => 'Owner Date Added!', 'status' => 'info']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        // dd($owner);
        return view ('admin.owners.edit',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $owner = Owner::findOrFail($id);
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->password = Hash::make($request->name);
        $owner->save();

        return redirect() -> route('admin.owners.index')->with(['message'=>'Owner Date Updated!' , 'status' => 'info']);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Owner::findOrFail($id)->delete();

        return redirect() -> route('admin.owners.index')->with(['message'=>'Owner Date Deleted!' , 'status' => 'alert']);
    }

    public function expiredOwnerIndex(){
        $expiredOwners = Owner::onlyTrashed()->get();
        return view('admin.expired-owners',compact('expiredOwners'));

    }


    public function expiredOwnerDestroy($id){
        Owner::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('admin.expired-owners.index')->with(['message'=>'Owner Date Deleted Permanently!' , 'status' => 'alert']);}









}
