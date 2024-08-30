<?php

declare(strict_types=1);

namespace App\Exception;

use ApiPlatform\Metadata\ErrorResource;
use ApiPlatform\Metadata\Exception\ProblemExceptionInterface;

#[ErrorResource]
class ProductWasRemovedException extends \Exception implements ProblemExceptionInterface
{
    public function getType(): string
    {
        return 'Product was removed';
    }

    public function getTitle(): ?string
    {
        return null;
    }

    public function getStatus(): ?int
    {
        return 427;
    }

    public function getDetail(): ?string
    {
        return 'This is an error happening when a product was removed.';
    }

    public function getInstance(): ?string
    {
        return null;
    }
}
