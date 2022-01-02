<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    public function test_the_admin_index_page_is_rendered_properly()
    {
          $admin = Admin::factory()->create();
        $response = $this->get(url:'/doctors');
        $response->assertStatus(status:200);
    }
 function test_admin_can_add_doctors()
    {
          $admin = User::factory()->create();
          $this->actingAs($admin);
        $response = $this->post(url:'/doctors', data;['name'=>'Shuvo','phone'=>'78428975','speciality'=>'Cardiology','room'=>'50']);
        $response->assertStatus(status:302);
        $doctor=Doctor::first();
        $this->assertEquals(expected: '1', actual:Doctor::add());
        $this->assertEquals(expected: 'Shuvo', actual:$doctor->name);
        $this->assertEquals(expected: '78428975', actual:$doctor->phone);
        $this->assertEquals(expected: 'Cardiology', actual:$doctor->speciality);
        $this->assertEquals(expected: '50', actual:$doctor->room);
        $this->assertEquals(expected: $admin->id, actual:$doctor->admin->id);
        $this->assertInstanceOf(expected: admin::class, actual:$doctor->admin);
    }

}
