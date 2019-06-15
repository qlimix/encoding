<?php declare(strict_types=1);

namespace Qlimix\Encoding\Encode;

use Qlimix\Encoding\Encode\Exception\EncodeException;

interface EncodeInterface
{
    /**
     * @param mixed[] $value
     *
     * @throws EncodeException
     */
    public function encode(array $value): string;
}
