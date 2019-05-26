<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use App\Http\Requests\SmartphoneRequest;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        return view("page.smartphone", compact('smartphones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("page.new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SmartphoneRequest $request)
    {
        // $newSmartphone = $request -> all();
        // dd($newSmartphone);
        $validateData = $request -> validated();
        $smartphone = Smartphone::create($validateData);
        return redirect("smartphone")
                ->with('success', 'Smartphone inserito! ' . $smartphone -> id);
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
      $smartphone = Smartphone::findOrFail($id);
      return view("page.edit", compact("smartphone"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SmartphoneRequest $request, $id)
    {
      $validateData = $request -> validated();
      $smartphone = Smartphone::whereid($id) -> update($validateData);
      return redirect("smartphone")
            ->with("success", "Smartphone con id: $id modificato correttamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $smartphone = Smartphone::findOrFail($id);
      $smartphone -> delete();

      return redirect("smartphone")
              -> with("success", "Smartphone con id: $id cancellato!");
    }
}
