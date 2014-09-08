<?php

class VisitorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$visitors = DB::table('visitors')
								->orderBy('created_at', 'desc')
								->paginate(4);
		$data = [
            'visitors'=> $visitors,
        ];
        return View::make('visitors.index')->with($data);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$visitor = Visitor::findorFail($id);
        return View::make('visitors.show')->with('visitor', $visitor);
	}

}
