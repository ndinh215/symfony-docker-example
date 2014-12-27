<?php

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

class FeatureContext extends \Behat\MinkExtension\Context\MinkContext
{

    /**
     * @AfterStep
     */
    public function takeSnapshotAfterFailedStep(\Behat\Behat\Event\StepEvent $event)
    {
        $dir = __DIR__.'/../../screenshots';
        $filename = $dir.'/'.strtolower(str_replace(' ', '_',
                $event->getStep()->getParent()->getFeature()->getTitle().'--'.
                $event->getStep()->getText().':'.
                $event->getStep()->getLine()
            )).'.png';

        if (file_exists($filename)) {
            unlink($filename);
        }

        if (in_array($event->getResult(), array(\Behat\Behat\Event\StepEvent::SKIPPED, \Behat\Behat\Event\StepEvent::PASSED))) {
            return;
        }

        $driver = $this->getSession()->getDriver();

        if (!($driver instanceof \Behat\Mink\Driver\Selenium2Driver)) {
            return;
        }

        $this->getSession()->resizeWindow(1440, 900, 'current');
        $screenshot = $this->getSession()->getScreenshot();

        if (!is_dir($dir)) {
            mkdir($dir);
        }

        file_put_contents($filename, $screenshot);
        chmod($filename, 0777);
    }

}