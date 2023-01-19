<?php

use App\Services\Pdf;

it('cann read sample pdf', function () {

    $text = (new Pdf())
        ->setPdf(__DIR__ . '/sample.pdf')
        ->text();

    expect($text)
        ->toBeString()
        ->not()->toBeEmpty()
        ->toContain('A Simple PDF File');
});
