<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    { 
        //INDEX
 
        $response = $this->call('GET', '/photo');

        $this->assertEquals(200, $response->status());  

        // STORE
 
        $response = $this->call('POST', '/photo', 
        ['title' => 'Teste','sub_title'=>'teste subteste',
        'description'=>'Descrição de teste teste','slug'=>'2','is_active'=>1]);

        $response->assertStatus(201, $response->status());  
        
        //SHOW 
 
        $response = $this->call('GET', '/photo/13184255466270');

        $response->assertStatus(200, $response->status()); 
 
        //CREATE   

        $response = $this->call('GET', '/photo/create');

        $response->assertStatus(200, $response->status()); 

        //PUT 

         $response = $this->call('PUT', '/photo/13184255466270', 
        ['title' => 'Teste','sub_title'=>'teste subteste 56',
        'description'=>'Descrição de teste teste 8','slug'=>'57973992847','is_active'=>0]);

        $response->assertStatus(200, $response->status());
       
        //EDIT
        
        $response = $this->call('GET', 'photo/13184255466270/edit');

        $this->assertEquals(200, $response->status());  

        //DELETE
        
        $response = $this->call('DELETE', 'photo/13184255466270');

        $this->assertEquals(200, $response->status());  

    }
}
