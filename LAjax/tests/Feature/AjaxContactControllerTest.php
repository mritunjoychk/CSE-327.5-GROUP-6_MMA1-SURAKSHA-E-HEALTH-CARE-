<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AjaxContactControllerTest extends TestCase
{

    public function test_Contacts_Are_Rendered_Properly()
    {
        //we want to create an user

        $user=User::factory()->create();
        $this->actingAs($user);

        //we want to the user to give his information in the forms

        $response =$this->get('/ajax-contact-form');
        //we want assert that we got status 200

        $response->assertStatus(200);
    }
    public function test_users_need_to_fill_the_form(){


        $this->withoutExceptionHandling();
        $user=User::factory()->create();
        $this->actingAs($user);
        $response =$this->get('/ajax-contact-form',[

            'name'=>'sunjid',
            //'email'=>'sun@gmail.com',

            ]);

        $response->assertStatus(200);

        $contact=Contact::first();
       $this->assertEquals(1,Contact::count());

        $this->assertEquals('sunjid',actual: $contact->name);
      //  $this->assertEquals('email',actual: $contact->email);
        //$this->assertEquals($user->id,actual: $contact->user->id);
       // $this->assertEquals(User::class,actual: $contact->user);



    }
}
