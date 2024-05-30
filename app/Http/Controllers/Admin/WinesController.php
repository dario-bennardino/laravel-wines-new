<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WineRequest;
use App\Models\Wine;

class WinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wines = Wine::all();
        return view('admin.nuova-pagina', compact('wines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WineRequest $request)
    {
        $form_data = $request->all();
        $new_wine = new Wine();
        $new_wine->winery = $form_data['winery'];
        $new_wine->wine = $form_data['wine'];
        $new_wine->rating_average = $form_data['rating_average'];
        $new_wine->rating_reviews = $form_data['rating_reviews'];
        $new_wine->location = $form_data['location'];
        $new_wine->image = $form_data['image'];
        // dump($new_wine);
        $new_wine->save();
        return redirect()->route('admin.home', $new_wine);


        // $new_wine->fill($form_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
