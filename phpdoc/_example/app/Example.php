<?php

/**
 * This file is example for phpDocumentor.
 *
 * Code from https://docstore.mik.ua/orelly/webprog/pcook/ch21_09.htm
 */

namespace App;

/**
 * Example_Class is a sample class for demonstrating PHPDoc
 *
 * Example_Class is a class that has no real actual code, but merely
 * exists to help provide people with an understanding as to how the
 * various PHPDoc tags are used.
 *
 * Example usage:
 * if (Example_Class::example()) {
 *    print "I am an example.";
 * }
 *
 * @package  Example
 * @author   David Sklar <david@example.com>
 * @author   Adam Trachtenberg <adam@example.com>
 * @version  $Revision: 1.3 $
 * @access   public
 * @see      http://www.example.com/pear
 */
class Example extends PEAR
{
    /**
     * returns the sample data
     *
     * @param  string  $sample the sample data
     * @return array   all of the exciting sample options
     * @access private
     */
    function _sampleMe($sample)
    {
        // ...
    }
}
