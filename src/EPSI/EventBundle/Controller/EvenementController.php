<?php

namespace EPSI\EventBundle\Controller;

use DateTime;
use EPSI\EventBundle\Entity\Evenement;
use EPSI\EventBundle\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{

    public function newEventAction(Request $request)
    {
        $eventService = $this->get('eventService');

        $event = new Evenement();
        $event->setNbVisiteEvenement(0);
        $event->setDateCreation(new DateTime());
        $event->setHeureDebut(new DateTime());
        $event->setHeureFin(new DateTime());

        $form= $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $event = $form->getData();
            $eventService->saveEvent($event);

            return $this->redirectToRoute('epsi_event_homepage');
        }

        return $this->render('EPSIEventBundle:Event:newEvent.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function listEventAction()
    {
        $eventService = $this->get('eventService');
        $allEvents = $eventService->getEvents();

        return $this->render('EPSIEventBundle:Event:listEvent.html.twig', array(
                'events' => $allEvents
            )
        );
    }

    public function eventAction(int $id)
    {
        $eventService = $this->get('eventService');
        $event = $eventService->getEventById($id);

        $event->setNbVisiteEvenement($event->getNbVisiteEvenement()+1);
        $eventService->saveEvent($event);

        return $this->render('EPSIEventBundle:Event:event.html.twig', array(
                'event' => $event
            )
        );
    }

}