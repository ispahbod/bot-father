<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Trait\HttpResponseApiMethod;
use LaravelBot\BotFather\Trait\TokenConstructor;

class Game
{
    use TokenConstructor;
    use HttpResponseApiMethod;
    public function SendGame(){}
    public function SetGameScore(){}
    public function GetGameHighScores(){}
}
