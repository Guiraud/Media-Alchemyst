<?php

namespace MediaAlchemyst\Tests\Specification;

use MediaAlchemyst\Specification\Audio;
use MediaAlchemyst\Specification\SpecificationInterface;

class AudioTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Audio
     */
    protected $object;

    /**
     * @covers MediaAlchemyst\Specification\Audio::__construct
     */
    protected function setUp()
    {
        $this->object = new Audio();
    }

    /**
     * @covers MediaAlchemyst\Specification\Audio::getType
     */
    public function testGetType()
    {
        $this->assertEquals(SpecificationInterface::TYPE_AUDIO, $this->object->getType());
    }

    /**
     * @covers MediaAlchemyst\Specification\Audio::setAudioKiloBitrate
     * @covers MediaAlchemyst\Specification\Audio::getAudioKiloBitrate
     */
    public function testSetAudioKiloBitrate()
    {
        $this->object->setAudioKiloBitrate(200);
        $this->assertEquals(200, $this->object->getAudioKiloBitrate());
    }

    /**
     * @covers MediaAlchemyst\Specification\Audio::setAudioCodec
     * @covers MediaAlchemyst\Specification\Audio::getAudioCodec
     */
    public function testSetAudioCodec()
    {
        $this->object->setAudioCodec('Carlos');
        $this->assertEquals('Carlos', $this->object->getAudioCodec());
    }

    /**
     * @covers MediaAlchemyst\Specification\Audio::setAudioSampleRate
     * @covers MediaAlchemyst\Specification\Audio::getAudioSampleRate
     */
    public function testSetAudioSampleRate()
    {
        $this->object->setAudioSampleRate(22050);
        $this->assertEquals(22050, $this->object->getAudioSampleRate());
    }
}