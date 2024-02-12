<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Trait\HttpResponseApiMethod;
use LaravelBot\BotFather\Trait\TokenConstructor;

class Payment
{
    use TokenConstructor;
    use HttpResponseApiMethod;
    public function SendInvoice(){}
    public function CreateInvoiceLink(){}
    public function AnswerShippingQuery(){}
    public function AnswerPreCheckoutQuery(){}
}
