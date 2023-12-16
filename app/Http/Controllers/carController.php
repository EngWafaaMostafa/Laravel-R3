<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class carController extends Controller
{
    private $columns = ['title', 'description', 'published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('Cars', compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::create($data);
        return redirect('Cars');
        // $car = new Car();
        // $car->title = $request->title;
        // $car->description = $request->description;
        // if (isset($request->published)) {
        //     $car->published = 1;
        // } else {
        //     $car->published = 0;
        // }
        // // if ($request->published == 1)
        // //     $car->published = "YES";
        // // else
        // //     $car->published = "NO";
        // print($car);
        // $car->save();
        // return 'Data added successfully';
        //return $request->all();
        //return dd($request->request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('showCar', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('UpdateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::where('id', $id)->update($data);
        return redirect('Cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
