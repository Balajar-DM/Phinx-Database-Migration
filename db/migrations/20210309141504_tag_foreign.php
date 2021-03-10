<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TagForeign extends AbstractMigration
{
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
