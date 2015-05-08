<?php

namespace SumoCoders\FrameworkExampleBundle\EventListener;

use SumoCoders\FrameworkCoreBundle\Event\ConfigureMenuEvent;
use SumoCoders\FrameworkCoreBundle\EventListener\DefaultMenuListener;

class MenuListener extends DefaultMenuListener
{
    public function onConfigureMenu(ConfigureMenuEvent $event)
    {
        /** @var \SumoCoders\FrameworkUserBundle\Entity\User $user */
        $user = $this->getSecurityTokenStorage()->getToken()->getUser();
        $menu = $event->getMenu();

        if ($user) {
            $menuItem = $event->getFactory()->createItem(
                'menu.example.overview',
                array(
                    'uri' => '#',
                    'label' => 'menu.example.overview',
                )
            );
            $menuItem->setChildrenAttribute('class', 'subNavigation');
            $menuItem->setLinkAttribute('class', 'toggleSubNavigation');

            $menuItem->addChild(
                'menu.example.hello',
                array(
                    'route' => 'sumocoders_frameworkexample_default_hello',
                    'routeParameters' => array(
                        'name' => $user->getUsername(),
                    ),
                )
            );

            $menu->addChild($menuItem);

            $menuItem = $event->getFactory()->createItem(
                'menu.example.tutorials',
                array(
                    'uri' => '#',
                    'label' => 'menu.example.tutorials',
                )
            );
            $menuItem->setChildrenAttribute('class', 'subNavigation');
            $menuItem->setLinkAttribute('class', 'toggleSubNavigation');

            $menuItem->addChild(
                'menu.example.datepicker',
                array(
                    'route' => 'sumocoders_frameworkexample_tutorial_datepicker',
                )
            );

            $menu->addChild($menuItem);

        }
    }
}
