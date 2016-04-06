<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Core\Repositories\RolesRepository;
use App\Core\Entities\Roles;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $objRPY;
    public function __construct(){
        $this->objRPY=new RolesRepository();
    }

    public function index()
    {
return view('test.ajax')->with([
            'roles'=>$this->objRPY->forSelect()
            ]);
    }

public function ajaxData(Request $request){
    $objRoles=Roles::find($request->id);

    $arrayRespuesta[0]=array('id'=>'1'
        ,'nombre'=>'lectura');
    $arrayRespuesta[1]=array('id'=>'2'
        ,'nombre'=>'escritura');

    return response()->json(
        ['nombre'=>$objRoles->nombre,'data'=>$arrayRespuesta]);
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
