<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m170718_114435_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            //id	primaryKey
            'id' => $this->primaryKey(),
            //name	varchar(50)	名称
            'name'=>$this->string(50)->comment('名称'),
            //intro	text	简介
            'intro'=>$this->text()->comment('简介'),
            //sort	int(11)	排序
            'sort'=>$this->integer(11)->comment('排序'),
            //status	int(2)	状态(-1删除 0隐藏 1正常)
            'status'=>$this->integer(2)->comment('状态')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
