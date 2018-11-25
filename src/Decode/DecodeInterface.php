<?php declare(strict_types=1);

namespace Qlimix\Encoding\Decode;

use Qlimix\Encoding\Decode\Exception\DecodeException;

interface DecodeInterface
{
    /**
     * @param string $message
     *
     * @return array
     *
     * @throws DecodeException
     */
    public function decode(string $message): array;
}
