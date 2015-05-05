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
                    'route' => 'sumocoders_frameworkexample_default_bootstrapgrid',
                )
            );
            $menuItem->addChild(
                'Font Awesome',
                array(
                    'route' => 'sumocoders_frameworkexample_default_bootstrapfontawesome',
                )
            );
            $menuItem->addChild(
                'Typography',
                array(
                    'route' => 'sumocoders_frameworkexample_default_bootstraptypography',
                )
            );
            $menuItem->addChild(
                'Code',
                array(
                    'route' => 'sumocoders_frameworkexample_default_bootstrapcode',
                )
            );
            $menuItem->addChild(
                'Tables',
                array(
                    'route' => 'sumocoders_frameworkexample_default_bootstraptables',
                )
            );
            $menuItem->addChild(
                'Forms',
                array(
                    'route' => 'sumocoders_frameworkexample_default_bootstrapforms',
                )
            );
            $menuItem->addChild(
                'Buttons',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapbuttons',
                )
            );
            $menuItem->addChild(
                'Images',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapimages',
                )
            );
            $menuItem->addChild(
                'Helper classes',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstraphelperclasses',
                )
            );
            $menuItem->addChild(
                'Responsive utilities',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapresponsiveutilities',
                )
            );
            $menuItem->addChild(
                'Dropdowns',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapdropdowns',
                )
            );
            $menuItem->addChild(
                'Input groups',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapinputgroups',
                )
            );
            $menuItem->addChild(
                'Navs',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapnavs',
                )
            );
            $menuItem->addChild(
                'Navbar',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapnavbar',
                )
            );
            $menuItem->addChild(
                'Breadcrumbs',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapbreadcrumbs',
                )
            );
            $menuItem->addChild(
                'Pagination',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrappagination',
                )
            );
            $menuItem->addChild(
                'Labels',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstraplabels',
                )
            );
            $menuItem->addChild(
                'Badges',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapbadges',
                )
            );
            $menuItem->addChild(
                'Jumbotron',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapjumbotron',
                )
            );
            $menuItem->addChild(
                'Pageheader',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrappageheader',
                )
            );
            $menuItem->addChild(
                'Thumbnails',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapthumbnails',
                )
            );
            $menuItem->addChild(
                'Alerts',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapalerts',
                )
            );
            $menuItem->addChild(
                'Progress bars',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapprogressbars',
                )
            );
            $menuItem->addChild(
                'Media object',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapmediaobject',
                )
            );
            $menuItem->addChild(
                'List group',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstraplistgroup',
                )
            );
            $menuItem->addChild(
                'Panels',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrappanels',
                )
            );
            $menuItem->addChild(
                'Responsive embed',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapresponsiveembed',
                )
            );
            $menuItem->addChild(
                'Wells',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapwells',
                )
            );
            $menuItem->addChild(
                'Modal',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapmodal',
                )
            );
            $menuItem->addChild(
                'Tooltip',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstraptooltip',
                )
            );
            $menuItem->addChild(
                'Popover',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrappopover',
                )
            );
            $menuItem->addChild(
                'Collapse',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapcollapse',
                )
            );
            $menuItem->addChild(
                'Carousel',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapcarousel',
                )
            );
            $menuItem->addChild(
                'Sortable',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapsortable',
                )
            );
            $menuItem->addChild(
                'Autocomplete',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapautocomplete',
                )
            );
            $menuItem->addChild(
                'Datepicker',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapdatepicker',
                )
            );
            $menuItem->addChild(
                'Slider',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapslider',
                )
            );
            $menuItem->addChild(
                'Select 2',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapselect2',
                )
            );
            $menuItem->addChild(
                'Tags input',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstraptagsinput',
                )
            );
            $menuItem->addChild(
                'Filter',
                array(
                     'route' => 'sumocoders_frameworkexample_default_bootstrapfilter',
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

        }
    }
}
