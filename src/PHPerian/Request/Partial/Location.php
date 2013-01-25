<?php

    namespace PHPerian\Request\Partial;

    use \PHPerian\Request\Partial as Partial;
    use \PHPerian\Exception as Exception;

    /**
     * PHPerian: PHP library for Experian's Web Services
     *
     * A class for assisting with the generation of the Location XML block for request SOAP requests to Experian's Web
     * Services.
     *
     * @package     PHPerian
     * @category    Library
     * @author      Zander Baldwin <mynameiszanders@gmail.com>
     * @license     MIT/X11 <http://j.mp/mit-license>
     * @link        https://github.com/mynameiszanders/phperian/blob/develop/src/PHPerian/Request/Partial/Location.php
     */
    class Location extends Partial
    {

        /**
         * @var array $struct
         * Define a class member to hold the Applicant XML structure.
         */
        protected $struct = array(
            'LocationIdentifier' => -1,
        );

        /**
         * @var boolean $uk
         * An internal flag to determine whether this location is a UK address, or BFPO/Overseas address.
         */
        protected $uk = null;

        /**
         * Constructor Method
         *
         * @access public
         * @param boolean $uk
         * @return void
         */
        public function __construct($uk)
        {
            // If a non-boolean value is passed and verbose mode is on, throw an exception. 
            if(!is_bool($uk) && parent::$verbose) {
                throw new Exception();
            }
            $this->uk = (bool) $uk;
            parent::__construct();
        }

    }