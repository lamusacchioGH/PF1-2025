<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Usuario;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i =0; $i<5 ;$i++){
            $usuario = new Usuario();
            $usuario->setNombre("Usuario".$i);
            $usuario->setEmail("Usuario".$i."@gmail.com");
            $plainTextPassword = '1$2y$13$OP/0K0ulldZw5Tu4H1sqIu/Y2zZie2WdyQ3ha84U8GL4DEBcJNZEe';
            $usuario->setPassword($plainTextPassword);
            $manager->persist($usuario);
        }
        
 $manager->flush();

        
    }
}
