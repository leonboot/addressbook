<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 15-12-17
 * Time: 14:08
 */

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CountriesFixture extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $file = fopen(__DIR__.'/countries.txt', 'r');
        while ($line = fgets($file)) {
            $tmp = explode('|', trim($line));
            $country = (new Country())
                ->setName($tmp[0])
                ->setIso2Code($tmp[1])
                ->setIso3Code($tmp[2])
            ;
            $manager->persist($country);
        }

        $manager->flush();
    }
}