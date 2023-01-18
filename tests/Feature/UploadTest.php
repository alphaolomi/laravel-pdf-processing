<?php

it('has upload page', function () {
    $response = $this->get('/upload');

    $response->assertStatus(200);
});
