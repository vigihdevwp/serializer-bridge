<?php

declare(strict_types=1);

namespace VigihdevWP\Serializer\Bridge\Symfony\Factory;

use VigihdevWP\Serializer\Bridge\Symfony\Contracts\TransformerInterface;
use VigihdevWP\Serializer\Bridge\Symfony\Transformers\GenericJsonTransformer;
use VigihdevWP\Serializer\Exception\SerializerException;

final class JsonTransformerFactory
{

    public static function create(string $dtoClass): TransformerInterface
    {
        if (!class_exists($dtoClass)) {
            throw new SerializerException(sprintf('Class "%s" does not exist', $dtoClass));
        }
        return new GenericJsonTransformer($dtoClass);
    }
}
