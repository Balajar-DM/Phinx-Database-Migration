<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Foreign2 extends AbstractMigration
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
    public function up() {
        $table = $this->table('tags');
        $table->addColumn('tag_name','string')
            ->save();

        $reftable = $this->table('tag_relationship');
        $reftable->addColumn('tag_id','integer',['null' => true])
            ->addForeignKey('tag_id', 'tags', 'id',['delete'=> 'SET_NULL','update'=> 'NO_ACTION'])
            ->save();
    }

    public function down() {

    }
}
