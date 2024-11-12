<?php

declare(strict_types=1);

namespace Db;

interface EntityInterface
{
    public function getId(): ?int;
    public function getArrayCopy();
}
