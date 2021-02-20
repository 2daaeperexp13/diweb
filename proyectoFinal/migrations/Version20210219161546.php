<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210219161546 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pedido ADD direccion VARCHAR(255) NOT NULL, ADD tarjeta VARCHAR(255) NOT NULL, ADD fecha_vencimiento VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE producto_pedido DROP unidades');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pedido DROP direccion, DROP tarjeta, DROP fecha_vencimiento');
        $this->addSql('ALTER TABLE producto_pedido ADD unidades INT DEFAULT 1');
    }
}
