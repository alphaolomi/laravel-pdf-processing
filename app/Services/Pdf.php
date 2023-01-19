<?php

namespace App\Services;
use Symfony\Component\Process\ExecutableFinder;

class Pdf extends \Spatie\PdfToText\Pdf
{
    public function __construct(?string $binPath = null)
    {
        $binPath = (new ExecutableFinder())->find('pdftotext', 'pdftotext', [
            '/usr/local/bin',
        ]);

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
