<?php

namespace OAuth\Unit\UserData;

use OAuth\UserData\ExtractorFactory;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-02-07 at 21:13:15.
 */
class ExtractorFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ExtractorFactory
     */
    protected $factory;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->factory = new ExtractorFactory();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \OAuth\UserData\ExtractorFactory
     */
    public function testImplementsExtractorFactoryInterface()
    {
        $this->assertInstanceOf('\\OAuth\\UserData\\ExtractorFactoryInterface', $this->factory);
    }

    /**
     * @covers \OAuth\UserData\ExtractorFactory
     */
    public function testGetMappedExtractor()
    {
        /**
         * @var \Oauth\Common\Service\ServiceInterface $service
         */
        $service = $this->getMock('\\OAuth\\Common\\Service\\ServiceInterface', array(), array(), 'FakeService');
        $this->factory->addExtractorMapping('FakeService', '\\OAuth\\UserData\\Extractor\\Facebook');
        $extractor = $this->factory->get($service);
        $this->assertInstanceOf('\\OAuth\\UserData\\Extractor\\Facebook', $extractor);
    }

    /**
     * @covers \OAuth\UserData\ExtractorFactory
     */
    public function testGetUnmappedExtractor()
    {
        /**
         * @var \Oauth\Common\Service\ServiceInterface $service
         */
        $service = $this->getMock('\\OAuth\\OAuth2\\Service\\Facebook', array(), array(), 'Facebook', false);
        $extractor = $this->factory->get($service);
        $this->assertInstanceOf('\\OAuth\\UserData\\Extractor\\Facebook', $extractor);
    }

    /**
     * @covers \OAuth\UserData\ExtractorFactory
     * @expectedException \OAuth\UserData\Exception\UndefinedExtractorException
     * @expectedExceptionMessage Cannot find an extractor for the service "FakeService". Registered extractors: []
     */
    public function testGetThrowsUnmatchedExtractorException()
    {
        /**
         * @var \Oauth\Common\Service\ServiceInterface $service
         */
        $service = $this->getMock('\\OAuth\\Common\\Service\\ServiceInterface', array(), array(), 'FakeService');
        $this->factory->get($service);
    }

    /**
     * @covers \OAuth\UserData\ExtractorFactory
     * @expectedException \OAuth\UserData\Exception\InvalidExtractorException
     * @expectedExceptionMessage The class "stdClass" does not implement the interface OAuth\UserData\Extractor\ExtractorInterface
     */
    public function testGetThrowsInvalidExtractorException()
    {
        /**
         * @var \Oauth\Common\Service\ServiceInterface $service
         */
        $service = $this->getMock('\\OAuth\\Common\\Service\\ServiceInterface', array(), array(), 'FakeService');
        $this->factory->addExtractorMapping('FakeService', 'stdClass');
        $this->factory->get($service);
    }
}