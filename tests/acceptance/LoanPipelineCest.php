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
        $I->expect('The Login is working');

        //these two lines not working in Chrome webdriver
        // $I->seeElement('nav');
        // $I->seeElement('#sidebar-wrapper');
        $I->dontSeeElement('#error-message');
        
        $I->amGoingTo('Login form with valid credentials');
        $I->fillField('#username', 'peeyush.dayal');
        $I->fillField('#password', 'peeyush.dayal');
        $I->click('sign in');
        $I->see('DASHBOARD');

        $I->wait(4);
        $I->click('LOAN PROCESS MANAGEMENT');
        $I->seeInCurrentUrl('pipeline');
        $I->see('LOAN PIPELINE');
        $I->seeElement('#tableDefault0');

        $I->amGoingTo('Check if BIF is working Properly.');
        $I->expect('The BIF is Opening');
        $I->click('//*[@id="tableDefault0"]/tr[1]/td[2]/div/a[1]');

        $I->wait(4);
        $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        $I->see('BORROWER INPUT FORM');
        $I->seeElement('p.loan-number');
        $loanNumber = $I->grabTextFrom('p.loan-number');
        $I->amGoingTo($loanNumber);
    }

}