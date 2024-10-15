<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Collection\Collection as CollectionCollection;

class CarController extends Controller
{
    private $brand;
    public function __construct(
        Brand $brand,
    ){
        $this->brand = $brand;
    }

    /**
     * Display a listing of car
     *
     * @return View
     */
    public function index(): View
    {
        $carsList = Car::with(['category','brand'])->latest()->paginate(5);
        return view('admin.cars.index', compact('carsList'));
    }

    /**
     * Undocumented function
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.cars.create',compact('categories', 'brands'));
    }

    /**
     * Undocumented function
     *
     * @param CarStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CarStoreRequest $request): RedirectResponse
    {   
        $carData = $request->validated();
        $carData['fuel_type'] = $request->fuel_type;
        $carData['model_year'] = $request->model_year;
        $imgFile = $request->file('image');

        if (!empty($imgFile)) {
            $productImage = time() . '.' . $imgFile->getClientOriginalExtension();
            $destinationPath = public_path('/images/cars');
            $imgFile->move($destinationPath, $productImage);
            $carData['car_image'] =  $productImage;
        }
        Car::create($carData);
           
        return redirect()->route('admin.cars.index')
                         ->with('success', 'Car Details created successfully.');
    }

    /**
     * Undocumented function
     *
     * @param Car $product
     * @return View
     */
    public function show(Car $product): View
    {
        return view('products.show',compact('product'));
    }

    /**
     * Undocumented function
     *
     * @param Car $product
     * @return View
     */
    public function edit(Car $product): View
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Undocumented function
     *
     * @param CarUpdateRequest $request
     * @param Car $product
     * @return RedirectResponse
     */
    public function update(CarUpdateRequest $request, Car $product): RedirectResponse
    {
        $product->update($request->validated());
          
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Undocumented function
     *
     * @param Car $product
     * @return RedirectResponse
     */
    public function destroy(Car $product): RedirectResponse
    {
        $product->delete();
           
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }

    /**
     * Undocumented function
     *
     * @param integer $categoryId
     * @return array
     */
    public function getBrandItem(int $categoryId)
    {
        return  $this->brand->getBrandItem($categoryId);
    }
}
