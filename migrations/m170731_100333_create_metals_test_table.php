<?php

use yii\db\Migration;

/**
 * Handles the creation of table `metals_test`.
 */
class m170731_100333_create_metals_test_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('metals_test', [
            'id' => $this->primaryKey(),
            'type_title' => $this->string(),
            'type_desc' => $this->string(),
            'img_type' => $this->string(),
            'img_name' => $this->string(),
            'massa' => $this->string(),
            'value' => $this->string(),
            'type_title' => $this->string(),
            'status' => $this->string(),
            'from' => $this->string(),
            'to' => $this->string(),
            'operation' => $this->string(),
            'name_title' => $this->string(),
            'name_desc' => $this->string(),
            'name_type' => $this->string(),
            'date' => $this->string(),
            'time' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('metals_test');
    }
}
