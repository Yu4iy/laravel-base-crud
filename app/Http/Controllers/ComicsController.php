<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comics = Comic::all();
		 return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 
      $data = new Comic([
			'title'=> $request->get('title'),
			'description'=> $request->get('description'),
			'thumb'=> $request->get('thumb'),
			'price'=> $request->get('price'),
			'series'=> $request->get('series'),
			'sale_date'=> $request->get('sale_date'),
			'type'=> $request->get('type'),
		]);
		$data->save();
		return redirect('/comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$comic = Comic::find($id);
		if($comic){
			return view('comics.show', compact('comic'));
		}
		abort(404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$comic = Comic::find($id);
 
		return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$comic = Comic::find($id);
		$comic->title = $request->get('title');
		$comic->description = $request->get('description');
		$comic->thumb = $request->get('thumb');
		$comic->price = $request->get('price');
		$comic->series = $request->get('series');
		$comic->sale_date = $request->get('sale_date');
		$comic->type = $request->get('type');
		$comic->save();
		return redirect('/comics');
		
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
		  $comic->delete();
		  return redirect('/comics');
    }
}
