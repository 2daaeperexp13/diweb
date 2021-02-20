<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use App\Entity\Localidad;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $usuario=new Usuario();
        $usuario->setEmail("2daaeperexp13@ieslafuentezuelas.com")
                ->setPassword("1234")
                ->setRoles(["ROLE_ADMIN"])
                ->setNombre("admin")
                ->setAp1("admin")
                ->setAp2("")
                ->setDireccion("")
                ->setTelefono(6456);

        $manager->persist($usuario);
        $manager->flush();
    }
}
