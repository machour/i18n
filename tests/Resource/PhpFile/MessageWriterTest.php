<?php


namespace Yii\I18N\Tests\Resource\PhpFile;


use PHPUnit\Framework\TestCase;
use yii\base\Aliases;
use yii\i18n\PhpFile;

class MessageWriterTest extends TestCase
{
    public function testWriteToNewResource()
    {
        $writer = new PhpFile();
        $writer->write([
            'test' => 'test',
        ]);


    }
}