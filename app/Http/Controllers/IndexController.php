<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    private $car;
    public function __construct(
        Car $car,
    ){
        $this->car = $car;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(){
        // dd($this->car->get());
        return view('layouts.main_layouts');
    }

    public function getCarsList()
    {
        $carDetails =$this->car->get();
        $html = view('carlist', compact('carDetails'))->render();
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
}
