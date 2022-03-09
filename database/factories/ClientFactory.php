<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->name(),
      'email' => $this->faker->unique()->safeEmail(),
      'phone' => $this->faker->phoneNumber(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'website' => 'www.website.com',
      'cost' => rand(100, 20000),
      'responsive' => 'selected',
      'tech_support' => 'selected',
      'domain' => 'selected',
      'created_at' => now(),
      // 'remember_token' => Str::random(10),
    ];
  }
}
