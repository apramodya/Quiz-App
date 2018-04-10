<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder {

	public function run() {
		factory( \App\Question::class, 20 )->create();
	}
}
