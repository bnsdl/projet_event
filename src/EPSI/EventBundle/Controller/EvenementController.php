<?php

namespace EPSI\EventBundle\Controller;

use DateTime;
use EPSI\EventBundle\Entity\Evenement;
use EPSI\EventBundle\Form\EventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/event/new", name="epsi_event_addEvent")
     */
    public function newEventAction(Request $request)
    {
        $eventService = $this->get('eventService');
        $event = new Evenement();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();
            $file = $event->getImage();

            if ($file) {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
                $event->setImage($fileName);
            }

            $eventService->saveEvent($event);
            return $this->render('EPSIEventBundle:Home:index.html.twig');
        }

        return $this->render('EPSIEventBundle:Event:newEvent.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/event", name="epsi_event_listEvent")
     */
    public function listEventAction()
    {
        $eventService = $this->get('eventService');
        $allEvents = $eventService->getEvents();

        return $this->render('EPSIEventBundle:Event:listEvent.html.twig', array(
                'events' => $allEvents
            )
        );
    }

    /**
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/event/{id}")
     */
    public function eventAction(int $id)
    {
        $eventService = $this->get('eventService');
        $event = $eventService->getEventById($id);

        $event->increaseNbVisite();
        $eventService->saveEvent($event);

        return $this->render('EPSIEventBundle:Event:event.html.twig', array(
                'event' => $event
            )
        );
    }

}