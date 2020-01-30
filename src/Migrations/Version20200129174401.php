<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129174401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE conditions_packages (conditions_id INT NOT NULL, packages_id INT NOT NULL, INDEX IDX_8458888BC5FBDC0F (conditions_id), INDEX IDX_8458888BCA871E03 (packages_id), PRIMARY KEY(conditions_id, packages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conditions_packages ADD CONSTRAINT FK_8458888BC5FBDC0F FOREIGN KEY (conditions_id) REFERENCES conditions (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE conditions_packages ADD CONSTRAINT FK_8458888BCA871E03 FOREIGN KEY (packages_id) REFERENCES packages (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE conditions_packages');
    }
}
