<?php

it('has a simple retult true', function () {
    $array = [1, 2, 3, 4];
    $this->assertCount(4, $array);
});

it('shows an expectation', function () {
    expect(true)->toBe(true);
});

it('shows expectations', function () {
    $numbers = [1,2,4];

    expect($numbers)->each->toBeInt();
});

it('shows differents expectations', function () {
    $number = [1,2,3];

    expect($number)->sequence(
        fn ($number) => $number->toBe(1),
        fn ($number) => $number->toBe(2),
        fn ($number) => $number->toBe(3),
    );
});

// criando um médido particular
expect()->extend('toBeWithinRange', function ($min, $max) {
    return $this->toBeGreaterThanOrEqual($min)
        ->toBeLessThanOrEqual($max);
});

it('numerig ranges', function () {
    expect(100)->toBeWithinRange(90, 100);
});

it('true is true')
    ->assertEquals('oi', 'oi')
    ->assertTrue(true);

// precisa de conecção com o banco
// it('redirect to user profile', function () {
//     $user = \App\Models\User::factory()->create();

//     actiongAs($user)->get('/')->assertSee('Documentation');
// });

it('throws exception', function () {
    throw new Exception('Algo deu errado');
})->throws(Exception::class, 'Algo deu errado');

it('has emails', function ($email) {
    expect($email)->not->toBeEmpty();
})->with('emails');
