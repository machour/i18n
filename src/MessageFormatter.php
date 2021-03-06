<?php


namespace Yii\I18n;


interface MessageFormatter
{
    /**
     * @throws FormattingFailed
     */
    public function format(string $message, array $parameters, string $language): string;
}
