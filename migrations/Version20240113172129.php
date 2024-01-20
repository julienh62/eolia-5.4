<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240113172129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A14612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_6EA9A14612469DE2 ON calendar (category_id)');
        $this->addSql('ALTER TABLE purchase_item CHANGE calendar_name activitie_name VARCHAR(255) NOT NULL, CHANGE calendar_price activitie_price INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A14612469DE2');
        $this->addSql('DROP INDEX IDX_6EA9A14612469DE2 ON calendar');
        $this->addSql('ALTER TABLE calendar DROP category_id');
        $this->addSql('ALTER TABLE purchase_item CHANGE activitie_name calendar_name VARCHAR(255) NOT NULL, CHANGE activitie_price calendar_price INT NOT NULL');
    }
}
