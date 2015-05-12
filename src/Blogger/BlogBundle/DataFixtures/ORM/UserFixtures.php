<?php
/**
 * Created by PhpStorm.
 * User: yury
 * Date: 19.04.15
 * Time: 21:45
 */

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setPlainPassword('admin');
        $user->setEnabled(true);
        $user->setSuperAdmin(true);
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt($user->getCreatedAt());
        $manager->persist($user);

        $user1 = new User();
        $user1->setUsername('test1');
        $user1->setEmail('test1@test1.com');
        $user1->setPlainPassword('123123');
        $user1->setEnabled(true);
        $user1->setRoles(['ROLE_WRITER']);
        $user1->setCreatedAt(new \DateTime());
        $user1->setUpdatedAt($user1->getCreatedAt());
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername('test2');
        $user2->setEmail('test2@test2.com');
        $user2->setPlainPassword('123123');
        $user2->setEnabled(true);
        $user2->setRoles(['ROLE_WRITER']);
        $user2->setCreatedAt(new \DateTime());
        $user2->setUpdatedAt($user2->getCreatedAt());
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername('test3');
        $user3->setEmail('test3@test3.com');
        $user3->setPlainPassword('123123');
        $user3->setEnabled(true);
        $user3->setRoles(['ROLE_WRITER']);
        $user3->setCreatedAt(new \DateTime());
        $user3->setUpdatedAt($user3->getCreatedAt());
        $manager->persist($user3);

        $user4 = new User();
        $user4->setUsername('test4');
        $user4->setEmail('test4@test4.com');
        $user4->setPlainPassword('123123');
        $user4->setEnabled(true);
        $user4->setRoles(['ROLE_WRITER']);
        $user4->setCreatedAt(new \DateTime());
        $user4->setUpdatedAt($user4->getCreatedAt());
        $manager->persist($user4);

        $user5 = new User();
        $user5->setUsername('test5');
        $user5->setEmail('test5@test5.com');
        $user5->setPlainPassword('123123');
        $user5->setEnabled(true);
        $user5->setRoles(['ROLE_WRITER']);
        $user5->setCreatedAt(new \DateTime());
        $user5->setUpdatedAt($user5->getCreatedAt());
        $manager->persist($user5);

        $manager->flush();

        $this->addReference('user-1', $user1);
        $this->addReference('user-2', $user2);
        $this->addReference('user-3', $user3);
        $this->addReference('user-4', $user4);
        $this->addReference('user-5', $user5);
    }

    public function getOrder()
    {
        return 1;
    }

}