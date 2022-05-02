<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Photo;

use App\Models\Car;

class AdminCarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(5);

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.cars.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rent' => 'required',
            'category_id' => 'required',
            'photo_id' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Car::create($input);

        alert()->success(
            'Car Created!',
            'The car has been created successfully'
        );

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        $categories = Category::all();

        return view('admin.cars.edit', compact('car', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'rent' => 'required',
            'category_id' => 'required',
            'photo_id' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Car::whereId($id)
            ->first()
            ->update($input);

        alert()->success('Updated!', 'The car has been updated successfully');

        return redirect()->route('cars.index');
    }

    public function destroy(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        unlink(public_path() . $car->photo->file);

        $car->delete();

        alert()->success('Deleted!', 'The car has been deleted successfully');

        return redirect()->route('cars.index');
    }
}
