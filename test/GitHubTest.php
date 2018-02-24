<?php
// namespace Cruzer\Cruzer;
require_once('../vendor/autoload.php');
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

class GitHubTests extends PHPUnit_Framework_TestCase
{

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'chrome');
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
    }

    protected $url = 'https://github.com';

    public function testGitHubHome()
    {
        $this->webDriver->get($this->url);
        // checking that page title contains word 'GitHub'
        $this->assertContains('GitHub', $this->webDriver->getTitle());
    }
}
