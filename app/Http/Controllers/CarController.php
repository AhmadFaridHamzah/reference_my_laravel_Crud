<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_cars = Car::all();
        return view('car.index',compact('data_cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('car.create');

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
        $this->validate($request,[
                'name' => 'required',
                'email' => 'required|email',
                'car' => 'required',
        ],[

            'required' => 'Ruangan Wajib Di isi'
            
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $car = $request->input('car');

        Car::create([

            'name'=>$name,
            'email'=>$email,
            'car'=>$car,
        ]);

        // return view('car.blade');
        return redirect()->route('car.index');
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
        $datacar_id = Car::find($id);

        return view('car.show',compact('datacar_id'));
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
        $datacar_id = Car::find($id);
        return view('car.edit',compact('datacar_id'));
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
        Car::where('id',$id)->update($request->only('name','email','car'));

        return redirect()->route('car.index');
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
        Car::destroy($id);
        return redirect()->route('car.index');
    }
}
