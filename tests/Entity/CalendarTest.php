<?php

namespace App\Tests\Entity;


use App\Entity\Calendar;
use App\Entity\PurchaseItem; // Import de la classe PurchaseItem
use App\Entity\User; // Import de la classe User
use PHPUnit\Framework\TestCase;


class CalendarTest extends TestCase
{
    public function testSetTitle()
    {
        $calendar = new Calendar();
        $title = 'Test Calendar Title';
        $calendar->setTitle($title);

        $this->assertEquals($title, $calendar->getTitle());
    }

    public function testSetStartAndEnd()
    {
        $calendar = new Calendar();
        $start = new \DateTime('2023-08-02 12:00:00');
        $end = new \DateTime('2023-08-02 13:00:00');
        $calendar->setStart($start);
        $calendar->setEnd($end);

        $this->assertEquals($start, $calendar->getStart());
        $this->assertEquals($end, $calendar->getEnd());
    }

    public function testSetStock()
    {
        $calendar = new Calendar();
        $stock = 10;
        $calendar->setStock($stock);

        $this->assertEquals($stock, $calendar->getStock());
    }

    public function testSetBackgroundColor()
    {
        $calendar = new Calendar();
        $backgroundColor = '#FF0000';
        $calendar->setBackgroundColor($backgroundColor);

        $this->assertEquals($backgroundColor, $calendar->getBackgroundColor());
    }

    public function testSetBorderColor()
    {
        $calendar = new Calendar();
        $borderColor = '#0000FF';
        $calendar->setBorderColor($borderColor);

        $this->assertEquals($borderColor, $calendar->getBorderColor());
    }

    public function testSetTextColor()
    {
        $calendar = new Calendar();
        $textColor = '#FFFFFF';
        $calendar->setTextColor($textColor);

        $this->assertEquals($textColor, $calendar->getTextColor());
    }

    public function testAddAndRemovePurchaseItem()
    {
        $calendar = new Calendar();
        $purchaseItem = new PurchaseItem();

        $this->assertCount(0, $calendar->getPurchaseItems());

        $calendar->addPurchaseItem($purchaseItem);
        $this->assertCount(1, $calendar->getPurchaseItems());

        $calendar->removePurchaseItem($purchaseItem);
        $this->assertCount(0, $calendar->getPurchaseItems());
    }

    public function testAddAndRemoveUser()
    {
        $calendar = new Calendar();
        $user = new User();

        $this->assertCount(0, $calendar->getUsers());

        $calendar->addUser($user);
        $this->assertCount(1, $calendar->getUsers());

        $calendar->removeUser($user);
        $this->assertCount(0, $calendar->getUsers());
    }
}
