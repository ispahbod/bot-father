<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Updates
{
    use DataConstructor;

    private function unsetOtherData(): void
    {
        unset($this->data['error_code'], $this->data['description']);
    }

    public function getFirst(): Update
    {
        $this->unsetOtherData();
        return new Update($this->data[0]);
    }

    public function getLast(): Update
    {
        $this->unsetOtherData();
        return new Update(end($this->data));
    }

    public function getIndex($index): Update
    {
        $this->unsetOtherData();
        return new Update($this->data[$index]);
    }

    public function getCount(): int
    {
        return count($this->data);
    }
}
