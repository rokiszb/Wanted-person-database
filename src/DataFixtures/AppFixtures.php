<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'secret'
        ));
        $user->setUsername('tester');
        $user->setApiToken('hashedTokenPlaceholder');

        $manager->persist($user);
        $manager->flush();
    }
}
