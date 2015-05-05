<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/bootstrap/grid")
     * @Template()
     */
    public function bootstrapGridAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/fontawesome")
     * @Template()
     */
    public function bootstrapFontawesomeAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/typography")
     * @Template()
     */
    public function bootstrapTypographyAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/code")
     * @Template()
     */
    public function bootstrapCodeAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/tables")
     * @Template()
     */
    public function bootstrapTablesAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/forms")
     * @Template()
     */
    public function bootstrapFormsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/buttons")
     * @Template()
     */
    public function bootstrapButtonsAction()
    {
        return array();
    }

     /**
     * @Route("/bootstrap/images")
     * @Template()
     */
    public function bootstrapImagesAction()
    {
        return array();
    }

     /**
     * @Route("/bootstrap/helperclasses")
     * @Template()
     */
    public function bootstrapHelperclassesAction()
    {
        return array();
    }

     /**
     * @Route("/bootstrap/responsiveutilities")
     * @Template()
     */
    public function bootstrapResponsiveutilitiesAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/dropdowns")
     * @Template()
     */
    public function bootstrapDropdownsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/inputgroups")
     * @Template()
     */
    public function bootstrapInputgroupsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/navs")
     * @Template()
     */
    public function bootstrapNavsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/navbar")
     * @Template()
     */
    public function bootstrapNavbarAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/breadcrumbs")
     * @Template()
     */
    public function bootstrapBreadcrumbsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/pagination")
     * @Template()
     */
    public function bootstrapPaginationAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/labels")
     * @Template()
     */
    public function bootstrapLabelsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/badges")
     * @Template()
     */
    public function bootstrapBadgesAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/jumbotron")
     * @Template()
     */
    public function bootstrapJumbotronAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/pageheader")
     * @Template()
     */
    public function bootstrapPageheaderAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/thumbnails")
     * @Template()
     */
    public function bootstrapThumbnailsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/alerts")
     * @Template()
     */
    public function bootstrapAlertsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/progressbars")
     * @Template()
     */
    public function bootstrapProgressbarsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/mediaobject")
     * @Template()
     */
    public function bootstrapMediaobjectAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/listgroup")
     * @Template()
     */
    public function bootstrapListgroupAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/panels")
     * @Template()
     */
    public function bootstrapPanelsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/responsiveembed")
     * @Template()
     */
    public function bootstrapResponsiveembedAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/wells")
     * @Template()
     */
    public function bootstrapWellsAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/modal")
     * @Template()
     */
    public function bootstrapModalAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/tooltip")
     * @Template()
     */
    public function bootstrapTooltipAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/popover")
     * @Template()
     */
    public function bootstrapPopoverAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/collapse")
     * @Template()
     */
    public function bootstrapCollapseAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/carousel")
     * @Template()
     */
    public function bootstrapCarouselAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/sortable")
     * @Template()
     */
    public function bootstrapSortableAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/autocomplete")
     * @Template()
     */
    public function bootstrapAutocompleteAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/datepicker")
     * @Template()
     */
    public function bootstrapDatepickerAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/slider")
     * @Template()
     */
    public function bootstrapSliderAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/select2")
     * @Template()
     */
    public function bootstrapSelect2Action()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/tagsinput")
     * @Template()
     */
    public function bootstrapTagsinputAction()
    {
        return array();
    }

    /**
     * @Route("/bootstrap/filter")
     * @Template()
     */
    public function bootstrapFilterAction()
    {
        return array();
    }
}
