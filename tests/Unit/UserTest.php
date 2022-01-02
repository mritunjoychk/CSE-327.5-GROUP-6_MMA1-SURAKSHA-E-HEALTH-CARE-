<?php

namespace Tests\Unit;

use Test\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   public function test_login_form()
   {

    $response = $this->get('/login');
    $response->assertstatus(200);
   }
   public function test_user_duplication()
   {
       $user1=user::make([
           'name'=>'john Doe',
           'email'=>'johndoe@gmail.com'
       ]);
       $user2=user::make([
        'name'=>'Dary',
        'email'=>'dary@gmail.com'
    ]);
    $this->assertTrue($user1->name != $user2->name);
   }
   public function test_delete_user()
   {
       $user = User::factory()->count(1)->make();
       $user = User::first();
       if($user){
           $user->delete();
       }
       $this->asserTrue(true);
   }
   public function test_it_stores_new_users()
   {
       $response= $this->post('/register', [
           'name' => '',
           'email' =>'dairy@gmail.com',
           'password' => 'dary1234',
           'password_confirmation' => 'dary1234'
       ]);
       $response->assertRedirect('/home');
   }
   public function test_database()
   {
       $this->assertDatabaseHas('users',[
           'name' =>'john'

       ]);
   }
   public function test_if_seeders_works()
   {
       $this->seed();//seed all seeders in the seeders folder
       //php artisan db:seed
   }
}
