<?php

class HomeCest
{
    function _before(AcceptanceTester $I)
    {
        // will be executed at the beginning of each test
        $I->amOnPage('/');
    }

    function viewPage(AcceptanceTester $I)
    {
        $I->wantTo('sign in');
        $I->see('Largest Commercial Real-Estate');
        $I->seeInTitle('Largest Commercial Real-Estate Lending Marketplace - CommLoan');
        $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        // $I->dontSeeInPageSource('<meta name="robots">');
    }

}