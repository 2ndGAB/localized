<?php
/**
 * Czech Localized Validation class. Handles localized validation for Czech Republic
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @since         Localized Plugin v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Localized\Validation;

use Localized\Validation\LocalizedValidation;

/**
 * CzValidation
 *
 */
class CzValidation extends LocalizedValidation
{
    /**
     * Checks a postal code for Czech Republic
     *
     * @param string $check The value to check.
     * @return bool Success.
     */
    public static function postal($check)
    {
        $pattern = '/^[1-7]\d{2} ?\d{2}$/';
        return (bool)preg_match($pattern, $check);
    }

    /**
     * Checks a phone number.
     *
     * @param string $check The value to check.
     * @return bool Success.
     */
    public static function phone($check)
    {
        //$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Checks a country specific identification number.
     *
     * @param string $check The value to check.
     * @return bool Success.
     */
    public static function personId($check)
    {
        //$this->markTestIncomplete('Not implemented yet.');
    }
}
