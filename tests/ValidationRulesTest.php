<?php

use TwoFAS\ValidationRules\ValidationRules;

class ValidationRulesTest extends PHPUnit_Framework_TestCase
{
    public function testRequired()
    {
        $this->assertEquals(ValidationRules::REQUIRED, ValidationRules::getContainingRule('validation.required'));
    }

    public function testRequiredWith()
    {
        $this->assertEquals(ValidationRules::REQUIRED_WITH, ValidationRules::getContainingRule('validation.required_with:sms'));
    }

    public function testRequiredIf()
    {
        $this->assertEquals(ValidationRules::REQUIRED_IF, ValidationRules::getContainingRule('validation.required_if:method,sms,call'));
    }

    public function testUnique()
    {
        $this->assertEquals(ValidationRules::UNIQUE, ValidationRules::getContainingRule('validation.unique'));
    }

    public function testUniquePhoneNumber()
    {
        $this->assertEquals(ValidationRules::UNIQUE_PHONE_NUMBER, ValidationRules::getContainingRule('validation.unique_phone_number'));
    }

    public function testMinString()
    {
        $this->assertEquals(ValidationRules::MIN, ValidationRules::getContainingRule('validation.min.string'));
    }

    public function testMinNumeric()
    {
        $this->assertEquals(ValidationRules::MIN, ValidationRules::getContainingRule('validation.min.numeric'));
    }

    public function testSizeArray()
    {
        $this->assertEquals(ValidationRules::SIZE, ValidationRules::getContainingRule('validation.size.array'));
    }

    public function testRegexDot()
    {
        $this->assertEquals(ValidationRules::UNSUPPORTED, ValidationRules::getContainingRule('validationDstring'));
    }

    public function testUnsupportedValidationRule()
    {
        $this->assertEquals(ValidationRules::UNSUPPORTED, ValidationRules::getContainingRule('validation.new_not_existing'));
    }
}
