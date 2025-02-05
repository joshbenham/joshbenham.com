<?php

declare(strict_types=1);

it('returns a successful home response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('returns a successful projects response', function () {
    $response = $this->get('/projects');

    $response->assertStatus(200);
});

it('returns a successful resume response', function () {
    $response = $this->get('/resume');

    $response->assertStatus(200);
});

it('returns a successful contact response', function () {
    $response = $this->get('/contact');

    $response->assertStatus(200);
});
