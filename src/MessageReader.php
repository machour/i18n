<?php


namespace Yii\I18n;


interface MessageReader
{
    public function all($context = null): array;
    public function one(string $id, $context = null): ?string;
    public function plural(string $id, int $count, $context = null): ?string;
}
