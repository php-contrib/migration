<?php

declare(strict_types=1);

namespace PhpContrib\Migration;

enum MigrationRunStatus
{
    case COMPLETED;
    case FAILED;
    case PENDING;
}
