<?php

use Phinx\Migration\AbstractMigration;

class AddChromiumClientType extends AbstractMigration
{
    public function up()
    {
        // Check if we need to add the client type
        if (!$this->fetchRow("SELECT * FROM `display_types` WHERE `type` = 'chromium'")) {
            $this->execute("
                INSERT INTO `display_types` (`type`, `name`, `enabled`) 
                VALUES ('chromium', 'Chromium Browser', 1)
            ");
        }

        // Update any existing settings
        $this->execute("
            UPDATE `setting`
            SET `value` = CASE 
                WHEN `value` = 'Off' AND `setting` = 'MAINTENANCE_ENABLED' THEN '0'
                WHEN `value` = 'On' AND `setting` = 'MAINTENANCE_ENABLED' THEN '1'
                ELSE `value`
            END
            WHERE `setting` = 'MAINTENANCE_ENABLED'
        ");
    }

    public function down()
    {
        $this->execute("DELETE FROM `display_types` WHERE `type` = 'chromium'");
    }
}