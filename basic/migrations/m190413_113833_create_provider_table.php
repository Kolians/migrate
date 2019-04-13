<?php

use yii\db\Migration;

/**
 * Handles the creation of table `provider`.
 * Has foreign keys to the tables:
 *
 * - `Id_Provider`
 * - `CountryOfOrigin`
 */
class m190413_113833_create_provider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('provider', [
            'id' => $this->primaryKey(),
            'Id_Provider' => $this->integer(),
            'CountryOfOrigin' => $this->string(),
            'nameFirm' => $this->string(),
            'phone' => $this->integer(),
        ]);

        // creates index for column `Id_Provider`
        $this->createIndex(
            'idx-provider-Id_Provider',
            'provider',
            'Id_Provider'
        );

        // add foreign key for table `Id_Provider`
        $this->addForeignKey(
            'fk-provider-Id_Provider',
            'provider',
            'Id_Provider',
            'Id_Provider',
            'id',
            'CASCADE'
        );

        // creates index for column `CountryOfOrigin`
        $this->createIndex(
            'idx-provider-CountryOfOrigin',
            'provider',
            'CountryOfOrigin'
        );

        // add foreign key for table `CountryOfOrigin`
        $this->addForeignKey(
            'fk-provider-CountryOfOrigin',
            'provider',
            'CountryOfOrigin',
            'CountryOfOrigin',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `Id_Provider`
        $this->dropForeignKey(
            'fk-provider-Id_Provider',
            'provider'
        );

        // drops index for column `Id_Provider`
        $this->dropIndex(
            'idx-provider-Id_Provider',
            'provider'
        );

        // drops foreign key for table `CountryOfOrigin`
        $this->dropForeignKey(
            'fk-provider-CountryOfOrigin',
            'provider'
        );

        // drops index for column `CountryOfOrigin`
        $this->dropIndex(
            'idx-provider-CountryOfOrigin',
            'provider'
        );

        $this->dropTable('provider');
    }
}
