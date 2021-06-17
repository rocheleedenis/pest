<?php

use App\Http\Livewire\Counter;

it('it can be incremented again')
    ->livewire(Counter::class)
    ->call('increment')
    ->assertSee(1);

it('it can be decremented')
    ->livewire(Counter::class)
    ->call('decrement')
    ->assertSee(-1);
