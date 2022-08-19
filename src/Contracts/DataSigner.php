<?php

declare(strict_types=1);

namespace Paddle\Signature\Contracts;

interface DataSigner
{
    public function signData(string $data, string $key): string;
}
