<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SiteOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Site Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Site Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $siteOptions = new FieldsBuilder('site_options');

        $siteOptions
            ->addTrueFalse('available_for_new_opportunities', ['label' => 'Available for new opportunities?'])
                ->setDefaultValue(true)
                ->setWidth('50%')
            ->addText('new_opportunities_message', ['label' => 'New opportunities message'])
                ->conditional('available_for_new_opportunities', '==', '1')
                ->setDefaultValue('Available for new opportunities')
                ->setWidth('50%')
            ->addText('site_name', ['label' => 'Site Name'])
                ->setRequired()
                ->setWidth('50%')

            ->addText('email_address', ['label' => 'Email Address'])
                ->setRequired()
                ->setWidth('50%');

        return $siteOptions->build();
    }
}
