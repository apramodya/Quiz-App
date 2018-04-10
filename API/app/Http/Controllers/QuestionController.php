<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {

	public function index() {

		$questions = Question::orderBy(DB::raw('RAND(100)'))->paginate(20);

		return QuestionResource::collection($questions);
	}


	public function create() {
		//
	}


	public function store( Request $request ) {
		//
	}


	public function show( $id ) {
		$question = Question::findOrFail($id);

		return new QuestionResource($question);
	}


	public function edit( $id ) {
		//
	}


	public function update( Request $request, $id ) {
		//
	}


	public function destroy( $id ) {
		//
	}
}
