<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 20; $i++) {
            $user[$i] = new User();
            $user[$i]->setName($faker->lastName)
                ->setSurname($faker->firstName)
                ->setBirthday(date_create($faker->date()))
                ->setEmail($faker->email)
                ->setLogin($faker->userName)
                ->setPassword($faker->password)
                ->setRoles(["ROLE_USER"]);
            $manager->persist($user[$i]);
        }
        $manager->flush();
    }
}
