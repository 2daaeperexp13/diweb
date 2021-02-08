<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210208104207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE img_user');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D4E7121AF');
        $this->addSql('ALTER TABLE usuario ADD foto LONGBLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D4E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE img_user (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, img LONGBLOB NOT NULL, UNIQUE INDEX UNIQ_43822771DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE img_user ADD CONSTRAINT FK_43822771DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D4E7121AF');
        $this->addSql('ALTER TABLE usuario DROP foto');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D4E7121AF FOREIGN KEY (provincia_id) REFERENCES localidad (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
