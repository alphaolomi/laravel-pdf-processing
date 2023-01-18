<?php

namespace App\Services;

class Pdf extends \Spatie\PdfToText\Pdf
{
    public function __construct(?string $binPath = '/usr/bin/pdftotext')
    {
        if (!file_exists($binPath)) {
            $binPath = '/usr/local/bin/pdftotext';
        }

        if (!file_exists($binPath)) {
            throw new \Exception(
                sprintf('pdftotext not found. Please install it or set the path manually. See %s', 'https://github.com/spatie/pdf-to-text#requirements')
            );
        }

        parent::__construct($binPath);
    }

    public function setPdf(string $pdf): self
    {
        if (!file_exists($pdf)) {
            throw new \Spatie\PdfToText\Exceptions\PdfNotFound("File `{$pdf}` not found");
        }

        if (!is_readable($pdf)) {
            throw new \Spatie\PdfToText\Exceptions\PdfNotFound("Could not read `{$pdf}`");
        }

        $this->pdf = $pdf;

        return $this;
    }
}
