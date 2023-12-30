<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;

class carController extends Controller
{
    use Common;
    //private $columns = ['title', 'description', 'published'];
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
        $categories = Category::get();

        return view('AddCar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->messages();
        // $message = [
        //     'title.required' => 'Title is required العنوان مطلوب ',
        //     'title.string' => 'should be string',
        //     'description.required' => 'should be text'
        // ];
        //$data = $request->only($this->columns);
        $data = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required',
        ], $message);


        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;

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
        $categories = Category::get();
        $car = Car::findOrFail($id);
        return view('UpdateCar', compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$categories = Category::get();
        $messages = $this->messages();
        $data = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required',
        ], $messages);

        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
            // unlink("assets/images/" . $request->oldImage);
        }

        $data['published'] = isset($request->published);
        Car::where('id', $id)->update($data);
        return redirect('Cars');
        // $message = $this->messages();
        // $data = $request->validate([
        //     'title' => 'required|string|max:50',
        //     'description' => 'required|string|max:50',
        //     'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        // ], $message);
        // return dd($data);
        // //$image = $request->file('image');
        // if ($request->hasFile('image')) {
        //     $fileName = $this->uploadFile($request->image, 'assets/images');
        //     $data['image'] = $fileName;
        // } else {
        //     // $car = Car::findOrFail($id);
        //     $data['image'] = $request->oldImage;
        // }
        // $data['published'] = isset($request->published);
        // Car::where('id', $id)->update($data);
        // return redirect('Cars');
        // if ($image) {
        //     $fileName = $this->uploadFile($image, 'assets/images');
        //     $data['image'] = $fileName;
        // } else {
        //     $car = Car::findOrFail($id);
        //     $data['image'] = $car->image;
        // }
        //$fileName = $this->uploadFile($request->image, 'assets/images');
        //$data['image'] = $fileName;
        //$data = $request->only($this->columns);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return redirect('Cars');
    }
    /**
     * trashed list
     */
    public function trashed()
    {
        $car = Car::onlyTrashed()->get();
        return view('trashedCar', compact('car'));
    }
    public function forceDelete(string $id)
    {
        Car::where('id', $id)->forceDelete();
        return redirect('Cars');
    }
    public function restore(string $id)
    {
        Car::where('id', $id)->restore();
        return redirect('Cars');
    }
    public function messages()

    {


        return [
            'title.required' => 'عنوان السياره مطلوب',
            'title.string' => 'Should be string',
            'description.required' => 'should be text',
            'image.required' => 'Please be sure to select an image',
            'image.mimes' => 'Incorrect image type',
            'image.max' => 'Max file size exceeded',
            'category_id' => 'please insert category',
        ];
    }
    public function upload(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Upload';
    }
}
