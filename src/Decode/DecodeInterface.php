<?php declare(strict_types=1);

namespace Qlimix\Encoding\Decode;

use Qlimix\Encoding\Decode\Exception\DecodeException;

interface DecodeInterface
{
    /**
     * @return mixed[]
     *
     * @throws DecodeException
     */
    public function decode(string $value): array;
}
