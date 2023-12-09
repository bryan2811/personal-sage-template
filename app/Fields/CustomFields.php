<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

trait CustomFields
{
    /**
     * Retrieves the value of a custom field based on the specified type.
     *
     * @param string $type The type of the custom field.
     * @return mixed The value of the custom field.
     * @throws \Exception If an invalid custom field type is provided.
     */
    public static function getCustomField($type) {
        switch ($type) {
            case 'section_spacing':
                return self::getSectionSpacing();
            default:
                throw new \Exception('Invalid custom field type');
        }
    }

    /**
     * Get the section spacing field.
     *
     * This method creates and returns a FieldsBuilder object for the 'section_spacing' field.
     * The field is a select field with options for different section spacing values.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder The section spacing field.
     */
    protected static function getSectionSpacing() {
        $sectionSpacing = new FieldsBuilder('section_spacing');

        $sectionSpacing
            ->addSelect('spacing_top', ['label' => 'Spacing Top'])
                ->addChoices([
                    'none' => 'None',
                    'small' => 'Small',
                    'normal' => 'Normal',
                    'large' => 'Large',
                ])
                ->setDefaultValue('normal')
            ->addSelect('spacing_bottom', ['label' => 'Spacing Bottom'])
                ->addChoices([
                    'none' => 'None',
                    'small' => 'Small',
                    'normal' => 'Normal',
                    'large' => 'Large',
                ])
                ->setDefaultValue('normal');

        return $sectionSpacing;
    }
}
