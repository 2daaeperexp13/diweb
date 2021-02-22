<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210221215815 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE comentario');
        $this->addSql('DROP TABLE tarjeta');
        $this->addSql('ALTER TABLE categoria ADD icono LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE pedido ADD direccion VARCHAR(255) NOT NULL, ADD tarjeta VARCHAR(255) NOT NULL, ADD fecha_vencimiento VARCHAR(255) NOT NULL, CHANGE fecha fecha VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tipo_producto ADD icono LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario ADD carrito JSON DEFAULT NULL, CHANGE foto foto LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comentario (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, usuario_id INT NOT NULL, fecha DATETIME NOT NULL, cometario LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, valoracion INT DEFAULT NULL, INDEX IDX_4B91E7027645698E (producto_id), INDEX IDX_4B91E702DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tarjeta (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, numero INT NOT NULL, fecha_vencimiento DATE NOT NULL, INDEX IDX_AE90B786DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comentario ADD CONSTRAINT FK_4B91E7027645698E FOREIGN KEY (producto_id) REFERENCES producto (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE comentario ADD CONSTRAINT FK_4B91E702DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE tarjeta ADD CONSTRAINT FK_AE90B786DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE categoria DROP icono');
        $this->addSql('ALTER TABLE pedido DROP direccion, DROP tarjeta, DROP fecha_vencimiento, CHANGE fecha fecha DATETIME NOT NULL');
        $this->addSql('ALTER TABLE tipo_producto DROP icono');
        $this->addSql('ALTER TABLE usuario DROP carrito, CHANGE foto foto LONGBLOB DEFAULT NULL');
    }
}
