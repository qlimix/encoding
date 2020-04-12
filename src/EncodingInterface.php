<?php declare(strict_types=1);

namespace Qlimix\Encoding;

use Qlimix\Encoding\Decode\DecodeInterface;
use Qlimix\Encoding\Encode\EncodeInterface;

interface EncodingInterface extends EncodeInterface, DecodeInterface
{
}
