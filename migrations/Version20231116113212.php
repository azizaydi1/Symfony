<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116113212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD idp_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DB49202 FOREIGN KEY (idp_id) REFERENCES panier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6EEAA67DB49202 ON commande (idp_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DB49202');
        $this->addSql('DROP INDEX UNIQ_6EEAA67DB49202 ON commande');
        $this->addSql('ALTER TABLE commande DROP idp_id');
    }
}
