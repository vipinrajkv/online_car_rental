<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;
use App\Models\LocationDetail;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    private $car;
    private $brand;
    private $category;
    public function __construct(
        Car $car,
        Brand $brand,
        Category $category,
    ){
        $this->car = $car;
        $this->brand = $brand;
        $this->category = $category;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(){
        // dd($this->car->get());
        $brandDetails = $this->brand->withCount('cars')->take(5)->get();
        $categories = $this->category->take(5)->get();
        return view('layouts.main_layouts', compact(['brandDetails','categories']));
    }

    public function getCarsList(Request $request)
    {
        $categories = $request->query('categories') ?? [];
        $selectedDate = $request->query('selectedDate') ?? [];
        $carDetails =$this->car->getAvailableCars($categories,$selectedDate);
        // dump($carDetails);
        $html = view('home.carlist', compact('carDetails'))->render();

        return response()->json([
            'status' => true,
            'html' => $html,
            'message' => 'Getting messages successfully.',
        ]);
    }

    /**
     * Show the cars list in listing
     *
     * @param string $id
     * @return View
     */
    public function show(string $id): View
    {
        
        return view('layouts.main_layouts', [
            // 'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function selectTravelLocation(Request $request): JsonResponse
    {
        // $data = LocationDetail::select("location_name")
        //             ->where('location_name', 'LIKE', '%'. $request->get('location_name'). '%')
        //             ->take(10)
        //             ->get();
       
        // return response()->json($data);

        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $data = LocationDetail::select("location_name")->where('location_name', 'LIKE', "%$search%")->get();
        }
        return response()->json($data);
    // }
    }
}
