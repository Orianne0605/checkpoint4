<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129173740 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE packages ADD affiliate_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE packages ADD CONSTRAINT FK_9BB5C0A79F12C49A FOREIGN KEY (affiliate_id) REFERENCES affiliate (id)');
        $this->addSql('CREATE INDEX IDX_9BB5C0A79F12C49A ON packages (affiliate_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE packages DROP FOREIGN KEY FK_9BB5C0A79F12C49A');
        $this->addSql('DROP INDEX IDX_9BB5C0A79F12C49A ON packages');
        $this->addSql('ALTER TABLE packages DROP affiliate_id');
    }
}
