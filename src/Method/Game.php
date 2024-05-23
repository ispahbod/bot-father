<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;

class Game
{
    use TokenConstructor;
    use HttpResponseApiMethod;
    public function SendGame(){}
    public function SetGameScore(){}
    public function GetGameHighScores(){}
}
