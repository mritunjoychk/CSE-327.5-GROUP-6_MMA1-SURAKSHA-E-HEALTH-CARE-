<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_admin_can_view_appointment_page_rendered_properly()
    {
          $admin = Admin::factory()->create();
        $response = $this->get(url:'/appointments');
        $response->assertStatus(status:200);
    }
 function test_admin_can_approve_appointments()
    {
          $admin = User::factory()->create();
          $this->actingAs($admin);
        $response = $this->post(url:'/appointments', data;['name'=>'Shifa','phone'=>'6564413','speciality'=>'Urology','room'=>'45','date'=>'12-2-2021']);
        $response->assertStatus(status:302);
        $appoint=Appointment::first();
        $this->assertEquals(expected: '1', actual:Appointment::add());
        $this->assertEquals(expected: 'Shifa', actual:$appoint->name);
        $this->assertEquals(expected: '6564413', actual:$appoint->phone);
        $this->assertEquals(expected: 'Urology', actual:$appoint->speciality);
        $this->assertEquals(expected: '45', actual:$appoint->room);
        $this->assertEquals(expected: '12-2-21', actual:$appoint->date);
        $this->assertEquals(expected: $admin->id, actual:$appoint->admin->id);
        $this->assertInstanceOf(expected: admin::class, actual:$appoint->admin);
    }

}
