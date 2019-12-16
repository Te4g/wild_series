<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;
use App\Service\Slugify;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTORS = [
        'Andrew Lincoln',
        'Lauren Cohan',
        'Norman Reedus',
        'Danai Gurira'
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $slugify = new Slugify();
            $actor->setSlug($slugify->generate($actor->getName()));
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
            $actor->addProgram($this->getReference('program_' . random_int(0,5)));

        }
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 4; $i < 54; $i++) {

            $actor = new Actor();
            $actor->setName($faker->name);
            $slugify = new Slugify();
            $actor->setSlug($slugify->generate($actor->getName()));
            $manager->persist($actor);

            $this->addReference('actor_' . $i, $actor);
            $actor->addProgram($this->getReference('program_' . random_int(0, 5)));
        }

        $manager->flush();

    }
    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}
