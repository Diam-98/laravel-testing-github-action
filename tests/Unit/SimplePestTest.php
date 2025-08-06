<?php


test('example', function () {
    expect(true)->toBeTrue(); // vrai => vrai
});

test('math_operation', function () {
    expect(1 + 1)->toBe(2); // 1 + 1 =? 2
    expect(1 + 1)->not->toBe(3); // 1    
    expect([])->toBeEmpty(); // [] => vide
    expect([1, 2, 3])->not->toBeEmpty(); //  [1, 2, 3] => non vide
    expect([1, 2, 3])->toHaveCount(3); //  [1, 2, 3] => 3 éléments
});

