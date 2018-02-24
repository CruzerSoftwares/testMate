<?php



class UserSubscriptionTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl('http://www.commloan.com/login');
        $this->setBrowser('firefox');
    }

    public function tearDown()
    {
        $this->stop();
    }

    public function validInputsProvider()
    {
        $inputs[] = [
            [
                'username'              => 'younesrafie',
                'password'              => 'mypassword',
                'password_confirmation' => 'mypassword',
                'email'                 => 'mymail@gmail.com',
                'cardHolderName'        => 'RAFIE Younes',
                'cardNumber'            => '378282246310005',
                'billingAddress'        => 'Narjiss B Fez Morocco',
                'cvc'                   => '850',
                'expirationMonth'       => '01',
                'expirationYear'        => '2016',
            ]
        ];

        return $inputs;
    }
    
    public static function invalidInputsProvider()
    {
        $inputs[] = [
            [
                'username'              => '@younesrafie',
                'password'              => 'mypassword',
                'password_confirmation' => 'mypassword',
                'email'                 => 'mymail@gmail.com',
                'cardHolderName'        => 'RAFIE Younes',
                'cardNumber'            => '378282246310005',
                'billingAddress'        => 'Narjiss B Fez Morocco',
                'cvc'                   => '850',
                'expirationMonth'       => '01',
                'expirationYear'        => '2016',
            ],
            "Username must only contain alpha numeric characters and dashes."
        ];
        // ...
        
        return $inputs;
    }

    public function testFormSubmissionWithUsername()
    {
        $this->byName('username')->value('younesrafie');
        $this->byId('subscriptionForm')->submit();

        $content = $this->byTag('body')->text();
        $this->assertEquals('Everything is Good!', $content);
    }

    public function fillFormAndSubmit(array $inputs)
    {
        $form = $this->byId('subscriptionForm');
        foreach ($inputs as $input => $value) {
            $form->byName($input)->value($value);
        }
        $form->submit();
    }

    public function testValidFormSubmission(array $inputs)
    {
        $this->url('/');
        $this->fillFormAndSubmit($inputs);

        $content = $this->byTag('body')->text();
        $this->assertEquals('Everything is Good!', $content);
    }
}
