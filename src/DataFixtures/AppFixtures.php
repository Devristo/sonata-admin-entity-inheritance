<?php

namespace App\DataFixtures;

use App\Entity\Sub;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 100; $i++) {
            $sub = new Sub();
            $manager->persist($sub);
        }

        $manager->flush();
    }
}
