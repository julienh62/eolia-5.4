<?php

namespace App\DataFixtures;

use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\User;
use App\Entity\Category;
use App\Entity\Calendar;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;


class CalendarFixtures extends Fixture
{
    protected $slugger;
    private $passwordEncoder;
    public function __construct(SluggerInterface $slugger, UserPasswordHasherInterface $passwordEncoder)
    {
        $this->slugger = $slugger;
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager): void
    {
     
        $faker = Faker\Factory::create('fr_FR');
        
       // les 3 categories
         for($cat = 1; $cat <= 3; $cat++){
            $category = new Category();
            $category->setTitle($faker->randomElement($array = array ('Char à voile','Catamaran','Char à voile kids')))
                   ->setSlug($faker->randomElement($array = array ('Char à voile','Catamaran','Char à voile kids')));
                     // ->setSlug(strtolower($this->slugger->slug($category->getTitle())));
                  
           $manager->persist($category);
        }

         $calendars = [];

        for($calen = 1; $calen <= 20; $calen++){
            $calendar = new Calendar();
          
            $calendar->setTitle($faker->randomElement($array = array ('Char à voile','Catamaran','Char à voile kids')))
                    //->setTitle("Calendar-n°$calen") //. $this->slugger->slug($category->getTitle()))
                   ->setPrice('5000')
                   ->setStock('12')
               //   ->setPicture('https://127.0.0.1:8000/assets/uploads/char-accueiltitregros1500.jpg')
                ->setStart($faker->dateTimeThisDecade($max = 'now', $timezone = null))
                ->setEnd($faker->dateTimeThisDecade($max = 'now', $timezone = null))
                ->setBackgroundColor("#fffffff")
                ->setBorderColor("#ffffff")
                ->setTextColor("#000000")
                  // ->setSlug(strtolower($this->slugger->slug($calendar->getName())))
                   ->setCategory($category->setTitle($faker->randomElement($array = array ('Char à voile','Catamaran','Char à voile kids'))));
                 //  ->setShortDescription($faker->paragraph());

            $calendars[] = $calendar;

            $manager->persist($calendar);
        }


        $admin = new User();
        $admin->setEmail('jhennebo@gmail.com')
            ->setFullName('julien hennebo')
            ->setPassword(
                $this->passwordEncoder->hashPassword($admin, 'azerty')
            )
            ->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');

        $users = [];

        for ($usr = 1; $usr <= 5; $usr++) {
            $user = new User();
            $user->setEmail($faker->email)
                ->setFullName($faker->name())
                ->setPassword(
                    $this->passwordEncoder->hashPassword($user, 'secret')
                );
         $users[] = $user;

            $manager->persist($user);
        }




           for($p = 0; $p < mt_rand(5, 10); $p++){
            $purchase = new Purchase;
            
            $purchase->setFullName($faker->name)
               ->setAddress($faker->streetAddress)
               ->setPostalCode($faker->postcode)
               ->setCity($faker->city)
               ->setTotal(mt_rand(2000, 30000))
               ->setCreatedAt(($faker->dateTimeInInterval('0 week', '+10 days')))
               ->setUser($faker->randomElement($users));

            $selectedCalendars = $faker->randomElements($calendars, mt_rand(3, 5));

            foreach ($selectedCalendars as $calendar) {
                $purchaseItem = new PurchaseItem();
                $purchaseItem->setCalendar($calendar)
                    ->setQuantity(mt_rand(1, 3))
                ->setCalendarName($calendar->getTitle())
                ->setCalendarPrice($calendar->getPrice())
                ->setTotal(
                    $purchaseItem->getCalendarPrice() * $purchaseItem->getQuantity()
                )
                    ->setPurchase($purchase);

                $manager->persist($purchaseItem);
            }



            //90% de chance que le staut soit PAID
            if($faker->boolean(90)) {
                $purchase->setStatus(Purchase::STATUS_PAID);
            }

               $manager->persist($purchase);

         }



           
        $manager->flush();
    }
}
