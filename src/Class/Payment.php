<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;

class Payment
{
    use TokenConstructor;
    use HttpResponseApiMethod;
    public function SendInvoice(){}
    public function CreateInvoiceLink(){}
    public function AnswerShippingQuery(){}
    public function AnswerPreCheckoutQuery(){}
}
