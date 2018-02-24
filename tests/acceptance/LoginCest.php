<?php

class LoginCest
{
    function _before(AcceptanceTester $I)
    {
        // will be executed at the beginning of each test
        $I->amOnPage('/login');
    }

    function LoginPage(AcceptanceTester $I)
    {
        $I->wantTo('Sign In');
        $I->see('Sign In');
        $I->seeInTitle('Member Account Login');
        $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        // $I->dontSeeInPageSource('<meta name="robots">');
        $I->amGoingTo('Login form with valid credentials');
        $I->fillField('#username', 'khushbu.chauhan-1');
        $I->fillField('#password', 'LAf63Tuz');
        $I->click('sign in');
        $I->dontSee('Form is filled incorrectly');
        // $I->seeElement('.notice');
        $I->dontSeeElement('.error');
        $I->seeInCurrentUrl('/dashboard');
        // $I->seeCurrentUrlEquals('/login');
        // $I->seeCurrentUrlMatches('~$/users/(\d+)~');
        // $I->seeInCurrentUrl('user/1');
        // $user_id = $I->grabFromCurrentUrl('~$/user/(\d+)/~');
        $I->see('DASHBOARD');
    }

}