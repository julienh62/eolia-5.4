<?php

namespace App\EventDispatcher;

use App\Event\CalendarViewEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class CalendarViewEmailSubscriber implements EventSubscriberInterface {

    protected $logger;
    protected $mailer;
    public function __construct(LoggerInterface $logger, MailerInterface $mailer)
    {
      $this->logger = $logger;
      $this->mailer = $mailer;
    }
    public static function getSubscribedEvents() :array
    {
        return [
            'calendar.view' => 'sendEmail'
        ];
    }
    public function sendEmail(CalendarViewEvent $calendarViewEvent){
        /*  $email = new TemplatedEmail();
        $email->from(new Address("contact@mail.com", "infos de la boutique"))
               ->to("admin@mail.com")
               ->html("<h1> Visite de la séance  {$calendarViewEvent->getCalendar()->getId()} </h1>")
               ->text("un visiteur est en train de voir la page de la séance n°" . $calendarViewEvent->getCalendar()->getId())
               ->htmlTemplate('emails/calendar_view.html.twig')
               ->context([
                 'calendar' => $calendarViewEvent->getCalendar()
               ])
              ->subject("visite de la séance n°" . $calendarViewEvent->getCalendar()->getId());

        $this->mailer->send($email);

        $this->logger->info("Email  pour la calendar" . $calendarViewEvent->getCalendar()->getId()); */
    }
 }