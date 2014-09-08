<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');
		//$this->call('PostTableSeeder');
        $this->call('VisitorTableSeeder');

	}  //end of function run
} //end of class DatabaseSeeder

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->is_admin = 1;
        $user->save();

    } //end of function run
} //end of class UserTableSeeder

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        for ($i = 1; $i <= 10; $i++)
        {
        	$post = new Post();
            $post->title = 'Post Title ' .  $i;
            $post->body = "Post Body Stuff" . $i;
            $post->user_id = 1;
            $post->slug = 'post-'.$i;
            $post->save();
            sleep(1);
        } //end of for loop

    } //end of function run

} //end of class PostTableSeeder
class VisitorTableSeeder extends Seeder {

    public function run()
    {
        DB::table('visitors')->delete();
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $visitor = new Visitor();
            $visitor->first_name = $faker->firstName;
            $visitor->last_name = $faker->lastName;
            $visitor->email = $faker->freeEmail;
            $visitor->phone_number = $faker->phoneNumber;
            $visitor->street = $faker->streetAddress;
            $visitor->city = $faker->city;
            $visitor->state = $faker->state;
            $visitor->zip = $faker->postcode;
            $visitor->find = $faker->sentence(100);
            $visitor->budget = rand(100000.00, 500000.00);
            $visitor->save();
        } //end of for loop

    } //end of function run

} //end of class PostTableSeeder