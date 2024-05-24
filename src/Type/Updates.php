<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Updates
{
    use DataConstructor;
    public function getFirst(): Update
    {
        return new Update($this->data[0]);
    }
    public function getLast(): Update
    {
        return new Update(end($this->data));
    }
    public function getIndex($index): Update
    {
        return new Update($this->data[$index]);
    }
    public function getCount(): int
    {
        return count($this->data);
    }
}