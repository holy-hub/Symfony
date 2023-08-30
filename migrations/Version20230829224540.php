<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230829224540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, date_de_creation DATE NOT NULL, numero_de_parking VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket_user (ticket_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BF48C371700047D2 (ticket_id), INDEX IDX_BF48C371A76ED395 (user_id), PRIMARY KEY(ticket_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, manager_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, code_agent VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649783E3463 (manager_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ticket_user ADD CONSTRAINT FK_BF48C371700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ticket_user ADD CONSTRAINT FK_BF48C371A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649783E3463 FOREIGN KEY (manager_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket_user DROP FOREIGN KEY FK_BF48C371700047D2');
        $this->addSql('ALTER TABLE ticket_user DROP FOREIGN KEY FK_BF48C371A76ED395');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649783E3463');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE ticket_user');
        $this->addSql('DROP TABLE `user`');
    }
}
