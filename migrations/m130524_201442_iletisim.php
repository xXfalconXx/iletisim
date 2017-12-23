<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_sample extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

			
		$this->createTable('{{%iletisims}}', [
			'mail' => $this->string(100)->notNull(),
			'konu' => $this->string(250)->notNull(),
			'mesaj' => $this->text()->notNull(),
			'tarih' => $this->date,
			'isim_soyisim' => $this->string(100)->notNull(),
            'id' => $this->primaryKey(),          
        ], $tableOptions);

    }

    public function down()
    {
		$this->dropTable('{{%iletisims}}');
    }
}
