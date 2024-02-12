<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Constant\ApiMethod;
use LaravelBot\BotFather\Trait\HttpResponseApiMethod;
use LaravelBot\BotFather\Trait\TokenConstructor;

class Setter
{
    use TokenConstructor;
    use HttpResponseApiMethod;

    public function SetMyName(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MY_NAME, $data);
        return empty($response[1]);
    }

    public function SetMyDescription(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MY_DESCRIPTION, $data);
        return empty($response[1]);
    }

    public function SetMyShortDescription(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MY_SHORT_DESCRIPTION, $data);
        return empty($response[1]);
    }

    public function SetMyDefaultAdministratorRights(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data);
        return empty($response[1]);
    }
}
