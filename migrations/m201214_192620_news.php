<?php

use yii\db\Migration;

/**
 * Class m201214_192620_news
 */
class m201214_192620_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE `news` (
                `id` int(11) NOT NULL,
                `title` varchar(255) NOT NULL,
                `article` text NOT NULL,
                `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");

        $this->execute("INSERT INTO `news` (`id`, `title`, `article`, `date_add`) VALUES
            (1, 'Новость 1', 'Текст новости 1', '2020-12-14 17:31:54'),
            (2, 'Новость 2', 'Текст новости 2', '2020-12-14 17:31:54'),
            (3, 'Новость 3', 'Текст новости 3', '2020-12-14 17:31:54'),
            (4, 'Новость 4', 'Текст новости 4', '2020-12-14 17:31:54'),
            (5, 'Новость 5', 'Текст новости 5', '2020-12-14 17:31:54'),
            (6, 'Новость 6', 'Текст новости 6', '2020-12-14 17:31:54'),
            (7, 'Новость 7', 'Текст новости 7', '2020-12-14 17:31:54'),
            (8, 'Новость 8', 'Текст новости 8', '2020-12-14 17:31:54'),
            (9, 'Новость 9', 'Текст новости 9', '2020-12-14 17:31:54'),
            (10, 'Новость 10', 'Текст новости 10', '2020-12-14 17:31:54'),
            (11, 'Новость 11', 'Текст новости 11', '2020-12-14 17:31:54'),
            (12, 'Новость 12', 'Текст новости 12', '2020-12-14 17:31:54'),
            (13, 'Новость 13', 'Текст новости 13', '2020-12-14 17:31:54'),
            (14, 'Новость 14', 'Текст новости 14', '2020-12-14 17:31:54'),
            (15, 'Новость 15', 'Текст новости 15', '2020-12-14 17:31:54'),
            (16, 'Новость 16', 'Текст новости 16', '2020-12-14 17:31:54');
        ");

        $this->execute("ALTER TABLE `news`
            ADD PRIMARY KEY (`id`);
        ");

        $this->execute("ALTER TABLE `news`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
            COMMIT;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201214_192620_news cannot be reverted.\n";

        return false;
    }
    */
}
