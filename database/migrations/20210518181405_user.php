<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Migration\CreationInterface;

final class user extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('user');
        $users->addColumn('username', 'string', ['limit' => 20])
              ->addColumn('password', 'string', ['limit' => 40])
              ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $users = $this->table('user');
        $users->drop()
              ->save();
    }
}
