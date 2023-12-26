<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class UserEntity extends KernelTestCase
{
    public function testGetId()
    {
        $user = new User();
        $this->assertNull($user->getId());

        // Vous pouvez également tester avec un ID spécifique, si nécessaire.
    }

    public function testGetEmail()
    {
        $user = new User();
        $email = 'john.doe@example.com';
        $user->setEmail($email);

        $this->assertEquals($email, $user->getEmail());
    }

    public function testGetUserIdentifier()
    {
        $user = new User();
        $email = 'john.doe@example.com';
        $user->setEmail($email);

        $this->assertEquals($email, $user->getUserIdentifier());
    }

    public function testGetRoles()
    {
        $user = new User();
        $roles = $user->getRoles();

        // Vérifiez que le rôle ROLE_USER est toujours présent par défaut
        $this->assertContains('ROLE_USER', $roles);
    }

    public function testSetPassword()
    {
        $user = new User();
        $password = 'secret123';
        $user->setPassword($password);

        $this->assertEquals($password, $user->getPassword());
    }

    // Vous pouvez écrire d'autres tests pour les autres propriétés et méthodes de la classe User.
}