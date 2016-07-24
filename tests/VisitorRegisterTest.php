<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisitorRegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterForm()
    {
        $this->visit('/register')
             ->see('Register Visitor');
    }

    public function testFormValidation()
    {

    $this->visit('/register')
         ->press('Register')
         ->see('The name field is required')
         ->see('The email field is required.')
         ->see('The phone field is required.')
         ->see('The ocupation field is required.');
    }

    public function testPostForm()
    {

    $this->visit('/register')
         ->type('Taylor'.rand(), 'name')
         ->type('Taylor'.rand().'@gmail.com', 'email')
         ->type('+62'.rand(), 'phone')
         ->type('Abcd'.rand(), 'ocupation')
         ->press('Register')
         ->see('Registrasi Berhasil');
    }
}
