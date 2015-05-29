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
                'example.menu.bootstrap',
                array(
                    'uri' => '#',
                    'label' => 'example.menu.bootstrap',
                )
            );
            $menuItem->setAttribute('class', 'dropdown');
            $menuItem->setAttribute('icon', 'icon icon-angle');
            $menuItem->setChildrenAttribute('class', 'dropdown-menu');
            $menuItem->setChildrenAttribute('role', 'menu');
            $menuItem->setLinkAttribute('class', 'menu-item dropdown-toggle');
            $menuItem->setLinkAttribute('role', 'button');
            $menuItem->setLinkAttribute('aria-expanded', 'false');
            $menuItem->setExtra('orderNumber', 200);

            $menuItem->addChild(
                'example.menu.hello',
                array(
                    'route' => 'sumocoders_frameworkexample_default_hello',
                    'routeParameters' => array(
                        'name' => $user->getUsername(),
                    ),
                )
            );

            $menuItem->addChild(
                'Grid',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_grid',
                )
            );
            $menuItem->addChild(
                'Font Awesome',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_fontawesome',
                )
            );
            $menuItem->addChild(
                'Typography',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_typography',
                )
            );
            $menuItem->addChild(
                'Code',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_code',
                )
            );
            $menuItem->addChild(
                'Tables',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_tables',
                )
            );
            $menuItem->addChild(
                'Forms',
                array(
                    'route' => 'sumocoders_frameworkexample_bootstrap_forms',
                )
            );
            $menuItem->addChild(
                'Buttons',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_buttons',
                )
            );
            $menuItem->addChild(
                'Images',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_images',
                )
            );
            $menuItem->addChild(
                'Helper classes',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_helperclasses',
                )
            );
            $menuItem->addChild(
                'Responsive utilities',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_responsiveutilities',
                )
            );
            $menuItem->addChild(
                'Dropdowns',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_dropdowns',
                )
            );
            $menuItem->addChild(
                'Input groups',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_inputgroups',
                )
            );
            $menuItem->addChild(
                'Navs',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_navs',
                )
            );
            $menuItem->addChild(
                'Navbar',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_navbar',
                )
            );
            $menuItem->addChild(
                'Breadcrumbs',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_breadcrumbs',
                )
            );
            $menuItem->addChild(
                'Pagination',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_pagination',
                )
            );
            $menuItem->addChild(
                'Labels',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_labels',
                )
            );
            $menuItem->addChild(
                'Badges',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_badges',
                )
            );
            $menuItem->addChild(
                'Jumbotron',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_jumbotron',
                )
            );
            $menuItem->addChild(
                'Pageheader',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_pageheader',
                )
            );
            $menuItem->addChild(
                'Thumbnails',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_thumbnails',
                )
            );
            $menuItem->addChild(
                'Alerts',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_alerts',
                )
            );
            $menuItem->addChild(
                'Progress bars',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_progressbars',
                )
            );
            $menuItem->addChild(
                'Media object',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_mediaobject',
                )
            );
            $menuItem->addChild(
                'List group',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_listgroup',
                )
            );
            $menuItem->addChild(
                'Panels',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_panels',
                )
            );
            $menuItem->addChild(
                'Responsive embed',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_responsiveembed',
                )
            );
            $menuItem->addChild(
                'Wells',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_wells',
                )
            );
            $menuItem->addChild(
                'Modal',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_modal',
                )
            );
            $menuItem->addChild(
                'Tooltip',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_tooltip',
                )
            );
            $menuItem->addChild(
                'Popover',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_popover',
                )
            );
            $menuItem->addChild(
                'Collapse',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_collapse',
                )
            );
            $menuItem->addChild(
                'Carousel',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_carousel',
                )
            );
            $menuItem->addChild(
                'Sortable',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_sortable',
                )
            );
            $menuItem->addChild(
                'Autocomplete',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_autocomplete',
                )
            );
            $menuItem->addChild(
                'Datepicker',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_datepicker',
                )
            );
            $menuItem->addChild(
                'Slider',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_slider',
                )
            );
            $menuItem->addChild(
                'Select 2',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_select2',
                )
            );
            $menuItem->addChild(
                'Tags input',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_tagsinput',
                )
            );
            $menuItem->addChild(
                'Filter',
                array(
                     'route' => 'sumocoders_frameworkexample_bootstrap_filter',
                )
            );
            // add the sub-menu-item class to all sub-menu-items
            foreach ($menuItem as $child) {
                $child->setLinkAttribute('class', 'sub-menu-item');
            }

            // possibly add more
            $menu->addChild($menuItem);

            $menuItem = $event->getFactory()->createItem(
                'example.menu.tutorials',
                array(
                    'uri' => '#',
                    'label' => 'example.menu.tutorials',
                )
            );

            $menuItem->setAttribute('class', 'dropdown');
            $menuItem->setAttribute('icon', 'icon icon-angle');
            $menuItem->setChildrenAttribute('class', 'dropdown-menu');
            $menuItem->setChildrenAttribute('role', 'menu');
            $menuItem->setLinkAttribute('class', 'menu-item dropdown-toggle');
            $menuItem->setLinkAttribute('role', 'button');
            $menuItem->setLinkAttribute('aria-expanded', 'false');
            $menuItem->setExtra('orderNumber', 200);

            $menuItem->addChild(
                'example.menu.datepicker',
                array(
                    'route' => 'sumocoders_frameworkexample_tutorial_datepicker',
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

            $menuItem = $event->getFactory()->createItem(
                'example.menu.examples',
                array(
                    'uri' => '#',
                    'label' => 'example.menu.examples',
                )
            );

            $menu->addChild($menuItem);
        }
    }
}
