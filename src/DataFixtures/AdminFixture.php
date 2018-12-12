<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Admin;

class AdminFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
            $admin = new Admin();
            $admin->setEmail('admin@test.com');
            return $admin;
            
        $manager->flush();
    }
}
