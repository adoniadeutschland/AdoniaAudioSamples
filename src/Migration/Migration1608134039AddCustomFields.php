<?php declare(strict_types=1);

namespace AdoniaAudioSamples\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1608134039AddCustomFields extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1608134039;
    }

    public function update(Connection $connection): void
    {
        // implement update

        // $query = <<<SQL
        // TODO: Add CustomFields for Plugin
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
