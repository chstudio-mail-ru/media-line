<?php

use yii\db\Migration;

/**
 * Class m201214_194316_categories
 */
class m201214_194316_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE `categories` (
            `id` int(11) NOT NULL,
            `parent_id` int(11) NOT NULL DEFAULT '0',
            `title` varchar(255) NOT NULL,
            `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");

        $this->execute("
            INSERT INTO `categories` (`id`, `parent_id`, `title`, `date_add`) VALUES
            (1, 0, 'Общество', '2020-12-14 17:07:48'),
            (2, 1, 'Городская жизнь', '2020-12-14 17:07:48'),
            (3, 1, 'Выборы', '2020-12-14 17:09:22'),
            (4, 2, 'День города', '2020-12-14 17:09:22'),
            (5, 4, 'Салюты', '2020-12-14 17:10:50'),
            (6, 2, 'Детская площадка', '2020-12-14 17:12:33'),
            (7, 6, '0-3 года', '2020-12-14 17:12:33'),
            (8, 6, '3-7 года', '2020-12-14 17:14:09'),
            (9, 1, 'Спорт', '2020-12-14 17:14:09'),
            (10, 9, 'Зимний спорт', '2020-12-14 17:15:09'),
            (11, 9, 'Летний спорт', '2020-12-14 17:15:09'),
            (12, 10, 'Фигурное катание', '2020-12-14 17:16:24'),
            (13, 10, 'Саннный спорт', '2020-12-14 17:16:24'),
            (14, 12, 'Мужчины', '2020-12-14 17:17:43'),
            (15, 12, 'Женщины', '2020-12-14 17:17:43'),
            (16, 12, 'Пары', '2020-12-14 17:18:21'),
            (17, 14, 'Произвольная программа', '2020-12-14 17:20:36'),
            (18, 14, 'Показательные выступления', '2020-12-14 17:20:36');
        ");

        $this->execute("
            ALTER TABLE `categories`
                ADD PRIMARY KEY (`id`),
                ADD KEY `parent_id` (`parent_id`);
        ");

        $this->execute("
            ALTER TABLE `categories`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
            COMMIT;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201214_194316_categories cannot be reverted.\n";

        return false;
    }
    */
}
