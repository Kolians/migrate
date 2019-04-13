<?php

use yii\db\Migration;

/**
 * Handles the creation of table `car`.
 */
class m190413_113511_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car', [
            'id' => $this->primaryKey(),
            'Id_Provider' => $this->integer(),
            'CountryOfOrigin' => $this->string(),
            'mark' => $this->string(),
            'model' => $this->string(),
            'bodyColor' => $this->string(),
            'type' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car');
    }
}
