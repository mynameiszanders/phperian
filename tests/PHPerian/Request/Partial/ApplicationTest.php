<?php

    namespace PHPerian\Request\Partial;

    use \PHPUnit_Framework_TestCase as TestCase;
    use \PHPerian\Exception as Exception;

    /**
     * PHPerian: PHP library for Experian's Web Services
     *
     * @package     PHPerian
     * @category    Library
     * @author      Zander Baldwin <mynameiszanders@gmail.com>
     * @license     MIT/X11 <http://j.mp/mit-license>
     * @link        https://github.com/mynameiszanders/phperian/blob/develop/tests/PHPerian/Request/Partial/ApplicationTest.php
     */
    class ApplicationTest extends TestCase
    {

        /**
         * Test: Applicant Creation
         *
         * @access public
         * @return void
         */
        public function testApplicationCreation()
        {
            $request = new \PHPerian\Request;
            $this->assertTrue(
                is_object($request),
                'Ensure that a new Request object can be created.'
            );

            $application = new \PHPerian\Request\Partial\Application('EQ');
            $this->assertTrue(
                is_object($application),
                'Ensure that a new instance of the Application class can be created successfully.'
            );

            $application = $request->createApplication('EQ');
            $this->assertTrue(
                is_object($application),
                'Ensure that a new Application object can be created through the Request object\'s magic method.'
            );

            $this->setExpectedException('\\PHPerian\\Exception');
            $request->createApplication('EQ1');
        }

        /**
         * Test: Amount
         *
         * @access public
         * @return void
         */
        public function testAmount()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->amount() === null,
                'Ensure that the return value of amount() is null when an amount has not yet been set.'
            );
            // Set an integer as value.
            $application = $application->amount(123);
            $this->assertTrue(
                is_object($application),
                'Ensure that the amount() method returns an object after successfully setting the amount (integer).'
            );
            $this->assertTrue(
                $application->amount() === 123,
                'Ensure the amount() method returns the same integer that we set.'
            );
            // Set a string as value.
            $application = $application->amount('123');
            $this->assertTrue(
                is_object($application),
                'Ensure that the amount() method returns an object after successfully setting the amount (string).'
            );
            $this->assertTrue(
                $application->amount() === 123,
                'Ensure the amount() method returns an integer after setting the value as a string.'
            );
            $wrong = '1234S';
            $request->silent();
            $return = $application->amount($wrong);
            $this->assertTrue(
                is_object($return),
                'Ensure that the amount() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->amount() === 123,
                'Ensure that the last value set is returned, and an invalid input has not overwritten it.'
            );
            $this->setExpectedException('\\PHPerian\\Exception');
            $request->verbose();
            $application = $application->amount($wrong);
        }

        /**
         * Test: Term
         *
         * @access public
         * @return void
         */
        public function testTerm()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->term() === null,
                'Ensure that the return value of term() is null when an term has not yet been set.'
            );
            // Set an integer as value.
            $application = $application->term(123);
            $this->assertTrue(
                is_object($application),
                'Ensure that the term() method returns an object after successfully setting the term (integer).'
            );
            $this->assertTrue(
                $application->term() === 123,
                'Ensure the term() method returns the same integer that we set.'
            );
            // Set a string as value.
            $application = $application->term('123');
            $this->assertTrue(
                is_object($application),
                'Ensure that the term() method returns an object after successfully setting the term (string).'
            );
            $this->assertTrue(
                $application->term() === 123,
                'Ensure the term() method returns an integer after setting the value as a string.'
            );
            $wrong = '1234S';
            $request->silent();
            $return = $application->term($wrong);
            $this->assertTrue(
                is_object($return),
                'Ensure that the term() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->term() === 123,
                'Ensure that the last value set is returned, and an invalid input has not overwritten it.'
            );
            $this->setExpectedException('\\PHPerian\\Exception');
            $request->verbose();
            $application = $application->term($wrong);
        }

        /**
         * Test: Limit Applied
         *
         * @access public
         * @return void
         */
        public function testLimitApplied()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->limitApplied() === null,
                'Ensure that the return value of limitApplied() is null when an limitApplied has not yet been set.'
            );
            // Set an integer as value.
            $application = $application->limitApplied(123);
            $this->assertTrue(
                is_object($application),
                'Ensure that the limitApplied() method returns an object after successfully setting the limitApplied (integer).'
            );
            $this->assertTrue(
                $application->limitApplied() === 123,
                'Ensure the limitApplied() method returns the same integer that we set.'
            );
            // Set a string as value.
            $application = $application->limitApplied('123');
            $this->assertTrue(
                is_object($application),
                'Ensure that the limitApplied() method returns an object after successfully setting the limitApplied (string).'
            );
            $this->assertTrue(
                $application->limitApplied() === 123,
                'Ensure the limitApplied() method returns an integer after setting the value as a string.'
            );
            $wrong = '1234S';
            $request->silent();
            $return = $application->limitApplied($wrong);
            $this->assertTrue(
                is_object($return),
                'Ensure that the limitApplied() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->limitApplied() === 123,
                'Ensure that the last value set is returned, and an invalid input has not overwritten it.'
            );
            $this->setExpectedException('\\PHPerian\\Exception');
            $request->verbose();
            $application = $application->limitApplied($wrong);
        }

        /**
         * Test: Limit Given
         *
         * @access public
         * @return void
         */
        public function testLimitGiven()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->limitGiven() === null,
                'Ensure that the return value of limitGiven() is null when an limitGiven has not yet been set.'
            );
            // Set an integer as value.
            $application = $application->limitGiven(123);
            $this->assertTrue(
                is_object($application),
                'Ensure that the limitGiven() method returns an object after successfully setting the limitGiven (integer).'
            );
            $this->assertTrue(
                $application->limitGiven() === 123,
                'Ensure the limitGiven() method returns the same integer that we set.'
            );
            // Set a string as value.
            $application = $application->limitGiven('123');
            $this->assertTrue(
                is_object($application),
                'Ensure that the limitGiven() method returns an object after successfully setting the limitGiven (string).'
            );
            $this->assertTrue(
                $application->limitGiven() === 123,
                'Ensure the limitGiven() method returns an integer after setting the value as a string.'
            );
            $wrong = '1234S';
            $request->silent();
            $return = $application->limitGiven($wrong);
            $this->assertTrue(
                is_object($return),
                'Ensure that the limitGiven() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->limitGiven() === 123,
                'Ensure that the last value set is returned, and an invalid input has not overwritten it.'
            );
            $this->setExpectedException('\\PHPerian\\Exception');
            $request->verbose();
            $application = $application->limitGiven($wrong);
        }

        /**
         * Test: Application Channel
         *
         * @access public
         * @return void
         */
        public function testApplicationChannel()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->applicationChannel() === null,
                'Ensure that the return value of applicationChannel() is null when an applicationChannel has not yet been set.'
            );
            $application = $application->applicationChannel('IT');
            $this->assertTrue(
                is_object($application),
                'Ensure that the applicationChannel() method returns an object after successfully setting the applicationChannel.'
            );
            $this->assertTrue(
                $application->applicationChannel() === 'IT',
                'Ensure the applicationChannel() method returns the same string that we set.'
            );
            $wrong = '$wrong';
            $request->silent();
            $return = $application->applicationChannel($wrong);
            $this->assertTrue(
                is_object($return),
                'Ensure that the applicationChannel() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->applicationChannel() === 'IT',
                'Ensure that the last value set is returned, and an invalid input has not overwritten it.'
            );
            $this->setExpectedException('\\PHPerian\\Exception');
            $request->verbose();
            $application = $application->applicationChannel($wrong);
        }

        /**
         * Test: Application Channel (Min Value Length)
         *
         * @access public
         * @return void
         */
        public function testApplicationChannelMin()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $request->verbose();
            $this->setExpectedException('\\PHPerian\\Exception');
            $application->applicationChannel('A');
        }

        /**
         * Test: Application Channel (Max Value Length)
         *
         * @access public
         * @return void
         */
        public function testApplicationChannelMax()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $request->verbose();
            $this->setExpectedException('\\PHPerian\\Exception');
            $application->applicationChannel('AAA');
        }

        /**
         * Test: Manual Authentication
         *
         * @access public
         * @return void
         */
        public function testManualAuthentication()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->manualAuthentication() === null,
                'Ensure that the return value of manualAuthentication() is null when an manualAuthentication has not yet been set.'
            );

            $application = $application->manualAuthentication(true);
            $this->assertTrue(
                is_object($application),
                'Ensure that the manualAuthentication() method returns an object after successfully setting the manualAuthentication.'
            );
            $this->assertTrue(
                $application->manualAuthentication() === true,
                'Ensure the manualAuthentication() method returns the same string that we set.'
            );
            $request->silent();
            $return = $application->manualAuthentication(0);
            $this->assertTrue(
                is_object($return),
                'Ensure that the manualAuthentication() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->manualAuthentication() === false,
                'Ensure that a falsey value sets the value as false when silent mode is on.'
            );
            $return = $application->manualAuthentication(1);
            $this->assertTrue(
                is_object($return),
                'Ensure that the manualAuthentication() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->manualAuthentication() === true,
                'Ensure that a truthy value sets the value as true when silent mode is on.'
            );

            $request->verbose();
            $this->setExpectedException('\\PHPerian\\Exception');
            $application = $application->manualAuthentication(0);
        }

        /**
         * Test: Search Consent
         *
         * @access public
         * @return void
         */
        public function testSearchConsent()
        {
            $request = new \PHPerian\Request;
            $application = $request->createApplication('EQ');
            $this->assertTrue(
                $application->searchConsent() === null,
                'Ensure that the return value of searchConsent() is null when an searchConsent has not yet been set.'
            );

            $application = $application->searchConsent(true);
            $this->assertTrue(
                is_object($application),
                'Ensure that the searchConsent() method returns an object after successfully setting the searchConsent.'
            );
            $this->assertTrue(
                $application->searchConsent() === true,
                'Ensure the searchConsent() method returns the same string that we set.'
            );
            $request->silent();
            $return = $application->searchConsent(0);
            $this->assertTrue(
                is_object($return),
                'Ensure that the searchConsent() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->searchConsent() === false,
                'Ensure that a falsey value sets the value as false when silent mode is on.'
            );
            $return = $application->searchConsent(1);
            $this->assertTrue(
                is_object($return),
                'Ensure that the searchConsent() method returns an object after an invalid input has been set when in silent mode.'
            );
            $this->assertTrue(
                $application->searchConsent() === true,
                'Ensure that a truthy value sets the value as true when silent mode is on.'
            );

            $request->verbose();
            $this->setExpectedException('\\PHPerian\\Exception');
            $application = $application->searchConsent(0);
        }

    }