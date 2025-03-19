<?php

declare(strict_types=1);

use App\Models\Block;

test('to array', function () {
    $block = Block::factory()->create()->fresh();

    expect(array_keys($block->toArray()))->toBe([
        'id',
        'name',
        'content',
        'created_at',
        'updated_at',
    ]);
});
