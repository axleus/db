<?php

declare(strict_types=1);

namespace Db\Feature\RelatedTable;

interface ReferenceInterface
{
    final public const REF_PARENT     = 'parent';
    final public const REF_DEPENDENT  = 'dependent';
}
