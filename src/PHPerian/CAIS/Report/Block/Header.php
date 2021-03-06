<?php

    namespace PHPerian\CAIS\Report\Block;

    use \PHPerian\CAIS\Collection;
    use \PHPerian\CAIS\Interfaces\Attribute as AttributeInterface;
    use \PHPerian\Exceptions;

    class Header extends Collection
    {

        protected static $attributeDefinitions = array(
            'headerIdentifier' => array(
                'type'          => AttributeInterface::READONLY,
                'start'         => 1,
                'end'           => 20,
                'name'          => 'Header Identifier',
                'default'       => 'HEADER',
                'justification' => AttributeInterface::JUSTIFY_RIGHT,
                'padding'       => ' ',
            ),
            'sourceCodeNumber' => array(
                'type'          => AttributeInterface::INTEGER,
                'start'         => 21,
                'end'           => 23,
                'name'          => 'Source Code Number',
                'default'       => null,
                'justification' => AttributeInterface::JUSTIFY_RIGHT,
                'padding'       => '0'
            ),
            'dateOfCreation' => array(
                'type'          => AttributeInterface::DATE,
                'start'         => 24,
                'end'           => 31,
                'name'          => 'Date of Creation',
                'default'       => null,
                'justification' => AttributeInterface::JUSTIFY_RIGHT,
                'padding'       => '0'
            ),
            'companyName' => array(
                'type'          => AttributeInterface::ALPHANUMERIC,
                'start'         => 32,
                'end'           => 61,
                'name'          => 'Company/Portfolio Name',
                'default'       => null,
                'justification' => AttributeInterface::JUSTIFY_LEFT,
                'padding'       => ' '
            ),
            'filler' => array(
                'type'          => AttributeInterface::READONLY,
                'start'         => 62,
                'end'           => 81,
                'name'          => 'Filler',
                'default'       => null,
                'justification' => AttributeInterface::JUSTIFY_LEFT,
                'padding'       => ' '
            ),
            'version' => array(
                'type'          => AttributeInterface::ALPHANUMERIC,
                'start'         => 82,
                'end'           => 89,
                'name'          => 'CAIS Version Indicator',
                'default'       => 'CAIS2007',
                'justification' => AttributeInterface::JUSTIFY_LEFT,
                'padding'       => ' '
            ),
            'overdraftReportingCutoff' => array(
                'type'          => AttributeInterface::INTEGER,
                'start'         => 90,
                'end'           => 95,
                'name'          => 'Overdraft Reporting Cut-Off',
                'default'       => 0,
                'justification' => AttributeInterface::JUSTIFY_RIGHT,
                'padding'       => '0',
            ),
            'cardsBehaviouralSharingFlag' => array(
                'type'          => AttributeInterface::BOOLEAN,
                'start'         => 96,
                'end'           => 96,
                'name'          => 'Cards Behavioural Sharing Flag',
                'default'       => false,
                'justification' => AttributeInterface::JUSTIFY_LEFT,
                'padding'       => ' ',
                'booleanflags'  => 'Y ',
            ),
            'endFiller' => array(
                'type'          => AttributeInterface::READONLY,
                'start'         => 97,
                'end'           => 530,
                'name'          => 'End Filler',
                'default'       => null,
                'justification' => AttributeInterface::JUSTIFY_LEFT,
                'padding'       => ' ',
            ),
        );

        public function __construct($source, $name, $sharing = null, $cutoff = null, $version = null)
        {
            // Create the attributes.
            parent::__construct();
            // Set the attributes.
            $this->setSourceCodeNumber($source);
            $this->setCompanyName($name);
            if($sharing !== null) {
                $this->setCardsBehaviouralSharingFlag($sharing);
            }
            if($cutoff !== null) {
                $this->setOverdraftReportingCutoff($cutoff);
            }
            if($version !== null) {
                $this->setVersion($version);
            }
            $this->setDateOfCreation(new \DateTime);
        }

    }
