<?php

class LoanPipelineCest
{
    function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
    }

    function LoanPipelinePage(AcceptanceTester $I)
    {
        $I->amGoingTo('Check if Loan Pipeline is working Properly.');
        $I->expect('The Login is workin');
        $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        
        $I->amGoingTo('Login form with valid credentials');
        $I->fillField('#username', 'khushbu.chauhan-1');
        $I->fillField('#password', 'LAf63Tuz');
        $I->click('sign in');
        $I->see('DASHBOARD');
        $I->click('LOAN PROCESS MANAGEMENT');
        $I->seeInCurrentUrl('pipeline');
        $I->see('LOAN PIPELINE');
        $I->seeElement('#tableDefault0');

        $I->amGoingTo('Check if Loan Pipeline is working Properly.');
        $I->expect('The BIF is Opening');
        $I->click('//*[@id="tableDefault0"]/tr[1]/td[2]/div/a[1]');
        $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        $I->see('BORROWER INPUT FORM');
    }

}