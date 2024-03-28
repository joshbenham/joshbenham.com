<?php

it('returns a successful home response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('returns a successful contact response', function () {
    $response = $this->get('/contact');

    $response->assertStatus(200);
});
