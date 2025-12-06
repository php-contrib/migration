<?php

declare(strict_types=1);

namespace PhpContrib\Migration;

use PDO;

interface MigrationInterface
{
    public function up(PDO $connection): MigrationRunStatus;

    public function down(PDO $connection): MigrationRunStatus;
}
