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
            $bootstrapChilds = array(
                'Grid' => 'sumocoders_frameworkexample_bootstrap_grid',
                'Font Awesome' => 'sumocoders_frameworkexample_bootstrap_fontawesome',
                'Typography' => 'sumocoders_frameworkexample_bootstrap_typography',
                'Code' => 'sumocoders_frameworkexample_bootstrap_code',
                'Tables' => 'sumocoders_frameworkexample_bootstrap_tables',
                'Forms' => 'sumocoders_frameworkexample_bootstrap_forms',
                'Buttons' => 'sumocoders_frameworkexample_bootstrap_buttons',
                'Images' => 'sumocoders_frameworkexample_bootstrap_images',
                'Helper classes' => 'sumocoders_frameworkexample_bootstrap_helperclasses',
                'Responsive utilities' => 'sumocoders_frameworkexample_bootstrap_responsiveutilities',
                'Dropdowns' => 'sumocoders_frameworkexample_bootstrap_dropdowns',
                'Input groups' => 'sumocoders_frameworkexample_bootstrap_inputgroups',
                'Navs' => 'sumocoders_frameworkexample_bootstrap_navs',
                'Breadcrumbs' => 'sumocoders_frameworkexample_bootstrap_breadcrumbs',
                'Pagination' => 'sumocoders_frameworkexample_bootstrap_pagination',
                'Labels' => 'sumocoders_frameworkexample_bootstrap_labels',
                'Badges' => 'sumocoders_frameworkexample_bootstrap_badges',
                'Jumbotron' => 'sumocoders_frameworkexample_bootstrap_jumbotron',
                'Pageheader' => 'sumocoders_frameworkexample_bootstrap_pageheader',
                'Thumbnails' => 'sumocoders_frameworkexample_bootstrap_thumbnails',
                'Alerts' => 'sumocoders_frameworkexample_bootstrap_alerts',
                'Progress bars' => 'sumocoders_frameworkexample_bootstrap_progressbars',
                'Media object' => 'sumocoders_frameworkexample_bootstrap_mediaobject',
                'List group' => 'sumocoders_frameworkexample_bootstrap_listgroup',
                'Panels' => 'sumocoders_frameworkexample_bootstrap_panels',
                'Responsive embed' => 'sumocoders_frameworkexample_bootstrap_responsiveembed',
                'Wells' => 'sumocoders_frameworkexample_bootstrap_wells',
                'Modal' => 'sumocoders_frameworkexample_bootstrap_modal',
                'Tooltip' => 'sumocoders_frameworkexample_bootstrap_tooltip',
                'Popover' => 'sumocoders_frameworkexample_bootstrap_popover',
                'Collapse' => 'sumocoders_frameworkexample_bootstrap_collapse',
                'Carousel' => 'sumocoders_frameworkexample_bootstrap_carousel',
                'Sortable' => 'sumocoders_frameworkexample_bootstrap_sortable',
                'Autocomplete' => 'sumocoders_frameworkexample_bootstrap_autocomplete',
                'Datepicker' => 'sumocoders_frameworkexample_bootstrap_datepicker',
                'Slider' => 'sumocoders_frameworkexample_bootstrap_slider',
                'Select 2' => 'sumocoders_frameworkexample_bootstrap_select2',
                'Tags input' => 'sumocoders_frameworkexample_bootstrap_tagsinput',
                'Filter' => 'sumocoders_frameworkexample_bootstrap_filter',
            );

            $bootstrapMenuItem = $this->createItemWithChilds(
                $event->getFactory(),
                'example.menu.bootstrap',
                200,
                $bootstrapChilds
            );

            $menu->addChild($bootstrapMenuItem);

            $tutorialChilds = array(
                'example.menu.hello' => $event->getFactory()->createItem(
                    'example.menu.hello',
                    array(
                        'route' => 'sumocoders_frameworkexample_default_hello',
                        'routeParameters' => array(
                            'name' => $user->getUsername(),
                        ),
                    )
                ),
                'example.menu.datepicker' => 'sumocoders_frameworkexample_tutorial_datepicker',
                'example.menu.labels' => 'sumocoders_frameworkexample_tutorial_labels',
                'example.menu.statistics' => 'sumocoders_frameworkexample_tutorial_statistics',
                'example.menu.customBreadCrumb' => 'sumocoders_frameworkexample_tutorial_custombreadcrumb',
                'example.menu.collections' => 'sumocoders_frameworkexample_tutorial_collections',
            );

            $tutorialMenuItem = $this->createItemWithChilds(
                $event->getFactory(),
                'example.menu.tutorials',
                300,
                $tutorialChilds
            );

            $menu->addChild($tutorialMenuItem);
        }
    }
}
