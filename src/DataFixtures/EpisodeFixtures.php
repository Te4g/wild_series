<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use App\Entity\Episode;


class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {

            $episode = new Episode();
            $episode->setTitle($faker->realText(30));
            $episode->setNumber($faker->randomDigitNotNull);
            $episode->setSynopsis($faker->text);
            $manager->persist($episode);

            $this->addReference('episode_' . $i, $episode);
            $episode->setSeason($this->getReference('season_' . random_int(0, 19)));
        }


        $manager->flush();
    }
    public function getDependencies()
    {
        return [SeasonFixtures::class];
    }
}
