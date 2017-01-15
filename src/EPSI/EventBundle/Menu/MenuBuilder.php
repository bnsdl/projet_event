<?php

namespace EPSI\EventBundle\Menu;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'epsi_event_homepage'));
        $menu->addChild('Artistes', array('route' => 'epsi_event_listArtiste'));
        $menu->addChild('Admin', array('route' => 'epsi_event_admin'));
//        $menu->addChild('Evénements', array('route' => 'epsi_event_event'));
        // ... add more children

        return $menu;
    }
}