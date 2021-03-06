<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129174105 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE packages_cards (packages_id INT NOT NULL, cards_id INT NOT NULL, INDEX IDX_B81C9455CA871E03 (packages_id), INDEX IDX_B81C9455DC555177 (cards_id), PRIMARY KEY(packages_id, cards_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE packages_cards ADD CONSTRAINT FK_B81C9455CA871E03 FOREIGN KEY (packages_id) REFERENCES packages (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE packages_cards ADD CONSTRAINT FK_B81C9455DC555177 FOREIGN KEY (cards_id) REFERENCES cards (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE packages_cards');
    }
}
