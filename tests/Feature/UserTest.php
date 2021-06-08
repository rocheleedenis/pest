<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;
use function Pest\Laravel\getJson;

uses(RefreshDatabase::class);

beforeEach(fn () => User::factory()->create());

it('has user on database')->assertDatabaseHas('users', [
    'id' => 1,
]);

it('has users', function () {
    get('api/users')->assertStatus(200);
});

it('has home page', function () {
    get('/')->assertStatus(200);
});
