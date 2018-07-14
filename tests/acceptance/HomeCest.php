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
        $I->wantTo('Check that CommLoan page can be indexed');
        $I->see('Largest Commercial Real-Estate');
        $I->seeInTitle('Largest Commercial Real-Estate Lending Marketplace - CommLoan');
        // $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        
        // try{
            $I->dontSeeInSource('<meta name="robots" content="index, follow"/>');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow"/>');
            
            $I->dontSeeInSource('<meta name="robots" content="index,follow"/>');
            $I->dontSeeInSource('<meta name="googlebot" content="index,follow"/>');
           
            $I->dontSeeInSource('<meta name="robots" content="index, follow">');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow">');

            $I->dontSeeInSource('<meta name="robots" content="index, follow" />');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow" />');
            // $I->dontSeeElementInDOM('meta[name=robots]');
        // } catch (Exception $e){
        //     mail('ramnaresh.kuswaha@onsumaye.com', 'CommLoan: Page Cannot be indexed', 'It looks like commloan home page contains code that prevent it from being indexed on search engines.');
        // }
    }

    function viewResearchPage(AcceptanceTester $I)
    {
        $I->amOnPage('/research');
        $I->wantTo('Check that Research page can be indexed');
        $I->see('RESEARCH');
        $I->seeInTitle('CommLoan Research');
        // $I->seeElement('nav');
        $I->dontSeeElement('#error-message');
        
        // try{
            $I->dontSeeInSource('<meta name="robots" content="index, follow"/>');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow"/>');
            
            $I->dontSeeInSource('<meta name="robots" content="index,follow"/>');
            $I->dontSeeInSource('<meta name="googlebot" content="index,follow"/>');
           
            $I->dontSeeInSource('<meta name="robots" content="index, follow">');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow">');

            $I->dontSeeInSource('<meta name="robots" content="index, follow" />');
            $I->dontSeeInSource('<meta name="googlebot" content="index, follow" />');
            // $I->dontSeeElementInDOM('meta[name=robots]');
        // } catch (Exception $e){
        //     mail('ramnaresh.kuswaha@onsumaye.com', 'CommLoan: Page Cannot be indexed', 'It looks like commloan home page contains code that prevent it from being indexed on search engines.');
        // }
    }

}