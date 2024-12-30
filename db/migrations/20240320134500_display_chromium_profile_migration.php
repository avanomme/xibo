<?php

use Phinx\Migration\AbstractMigration;

class DisplayChromiumProfileMigration extends AbstractMigration
{
    public function up()
    {
        // Add Chromium Display Profile if it doesn't exist
        if (!$this->fetchRow('SELECT * FROM displayprofile WHERE type = \'chromium\'')) {
            $this->execute('
                INSERT INTO `displayprofile` (`name`, `type`, `config`, `isDefault`, `userId`)
                VALUES (\'Chromium\', \'chromium\', \'[]\', 1, 1)
            ');
        }

        // Add client_type index if it doesn't exist
        if (!$this->hasIndex('display', 'display_client_type')) {
            $this->execute('
                ALTER TABLE `display` 
                ADD INDEX `display_client_type` (`clientType`)
            ');
        }
    }

    public function down()
    {
        // Remove Chromium Display Profile
        $this->execute('DELETE FROM displayprofile WHERE type = \'chromium\'');

        // Remove index
        if ($this->hasIndex('display', 'display_client_type')) {
            $this->execute('ALTER TABLE `display` DROP INDEX `display_client_type`');
        }
    }
} 