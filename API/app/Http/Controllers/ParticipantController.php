<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParticipantResource;
use App\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller {
	public function index() {
		//
	}

	public function store( Request $request ) {
		$participant = $request->isMethod('put') ? Participant::findOrFail($request->id) : new Participant;
		$participant->name = $request->name;
		$participant->email = $request->email;

		if ($participant->save()){
			return new ParticipantResource($participant);
		}
	}

	public function show( $id ) {
		//
	}

	public function destroy( $id ) {
		//
	}
}
