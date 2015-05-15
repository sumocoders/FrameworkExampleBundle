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

        if ($this->getSecurityAuthorizationChecker()->isGranted('ROLE_USER')) {
            $menuItem = $event->getFactory()->createItem(
                'example.menu.examples',
                array(
                    'uri' => '#',
                    'label' => 'example.menu.examples',
                )
            );
            $menuItem->setChildrenAttribute('class', 'subNavigation');
            $menuItem->setLinkAttribute('class', 'toggleSubNavigation');

            $menuItem->addChild(
                'example.menu.hello',
                array(
                    'route' => 'sumocoders_frameworkexample_default_hello',
                    'routeParameters' => array(
                        'name' => $user->getUsername(),
                    ),
                )
            );

            $menu->addChild($menuItem);

            $menuItem = $event->getFactory()->createItem(
                'example.menu.tutorials',
                array(
                    'uri' => '#',
                    'label' => 'example.menu.tutorials',
                )
            );
            $menuItem->setChildrenAttribute('class', 'subNavigation');
            $menuItem->setLinkAttribute('class', 'toggleSubNavigation');

            $menuItem->addChild(
                'example.menu.datepicker',
                array(
                    'route' => 'sumocoders_frameworkexample_tutorial_datepicker',
                )
            );

            $menu->addChild($menuItem);
        }
    }
}
