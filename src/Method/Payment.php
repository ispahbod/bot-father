<?php

namespace Ispahbod\BotFather\Method;

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
