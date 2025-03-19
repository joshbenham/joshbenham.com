<?php

declare(strict_types=1);

use App\Models\Contact;

test('to array', function () {
    $contact = Contact::factory()->create()->fresh();

    expect(array_keys($contact->toArray()))->toBe([
        'id',
        'name',
        'email',
        'content',
        'created_at',
        'updated_at',
    ]);
});
