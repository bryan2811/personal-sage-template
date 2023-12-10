<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\CustomFields;
use function Roots\bundle;

class HomeHero extends Block
{
    use CustomFields;

    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Home Hero';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Home Hero block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'align-full-width';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => true,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'title' => 'Home Hero',
        'subtitle' => 'Subtitle'
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'data' => $this->data()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $homeHero = new FieldsBuilder('home_hero');

        $homeHero
            ->addTab('Content')
                ->addText('title')
                ->addText('subtitle')

            ->addTab('Layout')
                ->addFields(CustomFields::getCustomField('section_spacing'));

        return $homeHero->build();
    }

    /**
     * Return the data to be passed to the block before rendering.
     *
     * @return array
     */
    public function data()
    {
        return [
            'title' => get_field('title') ?: $this->example['title'],
            'subtitle' => get_field('subtitle') ?: $this->example['subtitle'],
            'spacing_class' => 'wp-acf-block spacing-top-' . get_field('spacing_top') . ' spacing-bottom-' . get_field('spacing_bottom'),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        add_action('enqueue_block_editor_assets', function () {
            bundle('Blocks/HomeHero')->enqueueJs();
        }, 100);

        if(!is_admin()) {
            bundle('Blocks/HomeHero')->enqueueJs();
        }
    }
}
