<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    if(Auth::user()->hasRole('admin')){ 
        $response->assertRedirect(route('dashboard', absolute: false));
        }

       $response->assertRedirect(route('student_dashboard', absolute: false));
        
    
});