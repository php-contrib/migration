<?php

declare(strict_types=1);

namespace PhpContrib\Migration;

use PDO;

/**
 * Enables automatic and on-demand management of data
 */
interface MigrationInterface
{
    /**
     * Executes the migrations
     */
    public function up(PDO $connection): MigrationRunStatus;

    /**
     * Rolls back an executed migration
     */
    public function down(PDO $connection): MigrationRunStatus;
}
