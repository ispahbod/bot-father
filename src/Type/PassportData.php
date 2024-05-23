<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PassportData
{
    use DataConstructor;

    /**
     * Retrieves the array of encrypted passport elements.
     *
     * @return array Array with information about documents and other Telegram Passport elements that was shared with the bot.
     */
    public function getData(): array
    {
        return $this->data['data'];
    }

    /**
     * Retrieves the encrypted credentials required to decrypt the data.
     *
     * @return EncryptedCredentials The encrypted credentials.
     */
    public function getCredentials(): EncryptedCredentials
    {
        return new EncryptedCredentials($this->data['credentials']);
    }
}
