<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\TourRequest;

class TourController extends Controller
{

	private $tour;

	public function __construct(Tour $tour)
	{
		$this->tour = $tour;
	}

    /**
     * Display a listing of the tours pages.
     *
     */
    public function index()
    {
    	$tours = $this->tour->get();
        $data = ['title' => 'Туры','tours' => $tour];
        return view ('admin.tour', $data);
    }

    /**
     * Show the form for creating a new tour.
     *
     * @return \Illuminate\Http\Response
     */
    public function addContacts()
    {
        $data = ['title' =>' Добавить новый тур'];
        return view('admin.add_tour', $data);
    }

    /**
     * Store a newly created tour in storage.
     *
     * @param  \App\Http\Requests\TourRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        $input = $request->except('_token');
            if($request->hasFile('image')){
                $file = $request->file('image'); 
                $input['image'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img', $input['image']);
            }
        $tour = new Tour();
        $tour->fill($input);
            if($tour->save()){
                return redirect('admin')->with('status', 'Тур добавлен');
            }
    }

    /**
     * Show the form for editing the specified tour.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $tour = $this->tour->where('id', $id)->first();
        $data = ['title' => 'Редактирование страницы - '. $tour->name,'tour' => $tour];
        return view('admin.tour_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TourRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_edit_tour(TourRequest $request)
    {
        $tour = $this->tour->where('id', $request->id)->first();
        $tour->id=$tour->id;
        $tour->name=$tour->name;
        $tour->text=$request->text;
        $tour->image=$request->image;
        $tour->save();
        return redirect('admin')->with('status', 'Тур обновлен');
    }

    /**
     * Delete the specified tour from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete_tour(Request $request)
    {  
            $tour = $this->tour->where('id', $request->id)->first();
            $tour->delete();
            return redirect('admin/tours')->with('status', 'Тур удален');
    }
}
