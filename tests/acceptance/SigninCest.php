<?php

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('Username', 'davert');
        $I->fillField('Password', 'qwerty');
        $I->click('Login');
        $I->see('Hello, davert');
    }

    public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('Username', 'davert');
        $I->fillField('Password', 'qwerty');
        $I->click('Login');
        $I->see('Hello, davert');
    }
}
