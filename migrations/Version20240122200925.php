<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122200925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activity_user (activity_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_8E570DDB81C06096 (activity_id), INDEX IDX_8E570DDBA76ED395 (user_id), PRIMARY KEY(activity_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activity_user ADD CONSTRAINT FK_8E570DDB81C06096 FOREIGN KEY (activity_id) REFERENCES calendar (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activity_user ADD CONSTRAINT FK_8E570DDBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activitie_user DROP FOREIGN KEY FK_C8B28E4A76ED395');
        $this->addSql('ALTER TABLE activitie_user DROP FOREIGN KEY FK_C8B28E4EB0ED4F5');
        $this->addSql('DROP TABLE activitie_user');
        $this->addSql('ALTER TABLE category ADD activity TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7DEB0ED4F5');
        $this->addSql('DROP INDEX IDX_6FA8ED7DEB0ED4F5 ON purchase_item');
        $this->addSql('ALTER TABLE purchase_item CHANGE activitie_id activity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7D81C06096 FOREIGN KEY (activity_id) REFERENCES calendar (id)');
        $this->addSql('CREATE INDEX IDX_6FA8ED7D81C06096 ON purchase_item (activity_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activitie_user (activitie_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_C8B28E4EB0ED4F5 (activitie_id), INDEX IDX_C8B28E4A76ED395 (user_id), PRIMARY KEY(activitie_id, user_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE activitie_user ADD CONSTRAINT FK_C8B28E4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activitie_user ADD CONSTRAINT FK_C8B28E4EB0ED4F5 FOREIGN KEY (activitie_id) REFERENCES calendar (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activity_user DROP FOREIGN KEY FK_8E570DDB81C06096');
        $this->addSql('ALTER TABLE activity_user DROP FOREIGN KEY FK_8E570DDBA76ED395');
        $this->addSql('DROP TABLE activity_user');
        $this->addSql('ALTER TABLE category DROP activity');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7D81C06096');
        $this->addSql('DROP INDEX IDX_6FA8ED7D81C06096 ON purchase_item');
        $this->addSql('ALTER TABLE purchase_item CHANGE activity_id activitie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7DEB0ED4F5 FOREIGN KEY (activitie_id) REFERENCES calendar (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_6FA8ED7DEB0ED4F5 ON purchase_item (activitie_id)');
    }
}
