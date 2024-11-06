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
    ) {
        $this->brand = $brand;
    }

    /**
     * Display a listing of car
     *
     * @return View
     */
    public function index(): View
    {
        $carsList = Car::with(['category', 'brand'])->get();
        return view('admin.cars.index', compact('carsList'));
    }

    /**
     * create car
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.cars.create', compact('categories', 'brands'));
    }

    /**
     * store car
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
     * edit car
     *
     * @param Car $product
     * @return View
     */
    public function edit(Car $car): View
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.cars.edit', compact('car', 'categories', 'brands'));
    }

    /**
     * update car
     *
     * @param CarUpdateRequest $request
     * @param Car $product
     * @return RedirectResponse
     */
    public function update(CarUpdateRequest $request, Car $car): RedirectResponse
    {
        $carData = $request->validated();
        $carData['fuel_type'] = $request->fuel_type;
        $carData['model_year'] = $request->model_year;
        $imgFile = $request->file('car_image');
        $previousCarImage = $car->car_image;

        if ($request->hasFile('car_image') && $request->file('car_image')->isValid()) {

            if (!empty($previousCarImage) && file_exists(public_path('/images/cars/' . $previousCarImage))) {
                unlink(public_path('/images/cars/' . $previousCarImage));
            }
            $carData['car_image'] = $this->storeImage($imgFile);
        }
        try {
            $car->update($carData);
        } catch (\Exception $e) {
            return redirect()->route('admin.cars.index')
                ->with('success', [$e->getMessage()]);
        }

        return redirect()->route('admin.cars.index')
            ->with('success', 'Car Details Updated successfully.');
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
            ->with('success', 'Product deleted successfully');
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

    /**
     * Store the uploaded image and return the image file name
     *
     * @param \Illuminate\Http\UploadedFile $imgFile
     * @return string
     */
    private function storeImage($imgFile): string
    {
        $carImage = time() . '.' . $imgFile->getClientOriginalExtension();
        $destinationPath = public_path('/images/cars');
        $imgFile->move($destinationPath, $carImage);

        return $carImage;
    }
}
