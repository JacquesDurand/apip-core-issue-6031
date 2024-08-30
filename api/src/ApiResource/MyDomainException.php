<?php

declare(strict_types=1);

namespace App\ApiResource;

use ApiPlatform\Metadata\ErrorResource;
use ApiPlatform\Metadata\Exception\ProblemExceptionInterface;

#[ErrorResource]
class MyDomainException extends \Exception
{
//    public function getType(): string
//    {
//        return 'Teapot';
//    }
    public function getTitle(): ?string
    {
        return null;
    }
    public function getStatus(): ?int
    {
        return 418;
    }
    public function getDetail(): ?string
    {
        return 'My specific Domain Exception';
    }
    public function getInstance(): ?string
    {
        return null;
    }
}
