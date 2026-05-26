<?php

declare(strict_types=1);

namespace VigihdevWP\Serializer\Exception;

interface SerializerExceptionInterface extends \Throwable
{
    public function getContext(): array;

    public function toArray(): array;

    public function getFormattedMessage(): string;
}
