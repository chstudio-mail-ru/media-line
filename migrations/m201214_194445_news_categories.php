<?php

use yii\db\Migration;

/**
 * Class m201214_194445_news_categories
 */
class m201214_194445_news_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE `news_categories` (
              `id` int(11) NOT NULL,
              `news_id` int(11) NOT NULL,
              `category_id` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");

        $this->execute("
            INSERT INTO `news_categories` (`id`, `news_id`, `category_id`) VALUES
            (1, 1, 2),
            (2, 1, 3),
            (3, 2, 2),
            (4, 3, 2),
            (5, 4, 3),
            (6, 5, 4),
            (7, 6, 4),
            (8, 6, 5),
            (9, 7, 5),
            (10, 8, 6),
            (11, 8, 9),
            (12, 9, 10),
            (13, 10, 11),
            (14, 10, 12),
            (15, 11, 11),
            (16, 12, 12),
            (17, 13, 11),
            (18, 14, 13),
            (19, 14, 13),
            (20, 15, 14),
            (21, 16, 15),
            (22, 16, 17),
            (23, 16, 18),
            (24, 16, 3),
            (25, 16, 2),
            (26, 20, 16),
            (27, 1, 15),
            (28, 2, 15),
            (29, 4, 15),
            (30, 5, 15),
            (31, 6, 15);
        ");

        $this->execute("
            ALTER TABLE `news_categories`
                ADD PRIMARY KEY (`id`),
                ADD KEY `news_id` (`news_id`),
                ADD KEY `category_id` (`category_id`);
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news_categories');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201214_194445_news_categories cannot be reverted.\n";

        return false;
    }
    */
}
