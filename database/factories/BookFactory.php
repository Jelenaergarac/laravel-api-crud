<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



 private $images = [
      'https://images.unsplash.com/photo-1621827979802-6d778e161b28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
      'https://images.unsplash.com/photo-1521123845560-14093637aa7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
      'https://images.unsplash.com/photo-1605087156563-fdc6f3e8e6f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
      'https://images.unsplash.com/photo-1569510968950-87d17be37521?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1125&q=80',
      'https://images.unsplash.com/photo-1641261689151-7f818366e684?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',

  ];




     private $genres = [
         'action',
         'drama',
         'novel',
         'thriller',
         'music',
         'sport',
         'bio',
         'horror'
     ];
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(3),
            'author'=>$this->faker->name(),
            'description'=>$this->faker->paragraph(2),
            'genre'=>$this->faker->randomElement($this->genres),
            'image_url'=>$this->faker->randomElement($this->images)
              

        ];
    }
}
