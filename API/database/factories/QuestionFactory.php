<?php

use Faker\Generator as Faker;

$factory->define( \App\Question::class, function ( Faker $faker ) {
	return [
		'question' => $faker->text( 20 ),
		'option1'  => $faker->word,
		'option2'  => $faker->word,
		'option3'  => $faker->word,
		'option4'  => $faker->word,
		'answer'   => rand( 1, 4 )
	];
} );
