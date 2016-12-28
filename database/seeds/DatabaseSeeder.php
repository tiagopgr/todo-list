<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $task;

    function __construct(\App\Task $task)
    {
        $this->task = $task;
    }

    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 20; $i++)
        {

            $this->task->insert()->in('tasks')->set([
                'id' => $this->task->getLastId(),
                'title' => $faker->words(mt_rand(3, 8), true),
                'description' => $faker->words(mt_rand(20, 200), true),
                'status' => mt_rand(1, 3),
                'created_at' => \Carbon\Carbon::now()->format('d/m/Y h:i:s')

            ])->execute();

        }
    }
}
