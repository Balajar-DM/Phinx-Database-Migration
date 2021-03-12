<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 50; $i++) { 
            $data[] = [
                'username' => $faker->userName,
                'name' =>   $faker->name,
                'email' => $faker->email,
                'password' => password_hash('12345', PASSWORD_DEFAULT, ['cost' => 10]),
                'address' => $faker->address,
            ];
        }
        $this->table('users')->insert($data)->saveData();
    }
}
