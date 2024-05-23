<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;

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
    public function SetMyCommands(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MY_COMMANDS, $data);
        return empty($response[1]);
    }
    public function SetMessageReaction(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SET_MESSAGE_REACTION, $data);
        return empty($response[1]);
    }
}
