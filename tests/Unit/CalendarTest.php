<?php

namespace App\Tests\Entity;


use App\Entity\Activity;
use App\Entity\PurchaseItem; // Import de la classe PurchaseItem
use App\Entity\User; // Import de la classe User
use PHPUnit\Framework\TestCase;


class CalendarTest extends TestCase
{
    public function testSetTitle()
    {
        $activity = new Activity();
        $title = 'Test Activity Title';
        $activity->setTitle($title);

        $this->assertEquals($title, $activity->getTitle());
    }

    public function testSetStartAndEnd()
    {
        $activity = new Activity();
        $start = new \DateTime('2023-08-02 12:00:00');
        $end = new \DateTime('2023-08-02 13:00:00');
        $activity->setStart($start);
        $activity->setEnd($end);

        $this->assertEquals($start, $activity->getStart());
        $this->assertEquals($end, $activity->getEnd());
    }

    public function testSetStock()
    {
        $activity = new Activity();
        $stock = 10;
        $activity->setStock($stock);

        $this->assertEquals($stock, $activity->getStock());
    }

   
}
