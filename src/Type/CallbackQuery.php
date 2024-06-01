<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

final class CallbackQuery
{
    use DataConstructor;
    use ContentType;

    /**
     * Retrieves the unique identifier for this callback query.
     *
     * @return string The unique identifier.
     */
    public function getId(): string
    {
        return $this->data['id'];
    }

    /**
     * Retrieves the user who sent the callback query.
     *
     * @return User The user who sent the query.
     */
    public function getFrom(): User
    {
        return new User($this->data['from']);
    }

    /**
     * Retrieves the message sent by the bot with the callback button that originated the query.
     * This is optional.
     *
     * @return MaybeInaccessibleMessage|null The message, or null if not available.
     */
    public function getMessage(): ?MaybeInaccessibleMessage
    {
        return isset($this->data['message']) ? new MaybeInaccessibleMessage($this->data['message']) : null;
    }

    /**
     * Retrieves the identifier of the message sent via the bot in inline mode, that originated the query.
     * This is optional.
     *
     * @return string|null The inline message identifier, or null if not available.
     */
    public function getInlineMessageId(): ?string
    {
        return $this->data['inline_message_id'] ?? null;
    }

    /**
     * Retrieves the global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     *
     * @return string The chat instance identifier.
     */
    public function getChatInstance(): string
    {
        return $this->data['chat_instance'];
    }

    /**
     * Retrieves the data associated with the callback button.
     * This is optional.
     *
     * @return string|null The data, or null if not available.
     */
    public function getData(): ?string
    {
        return $this->data['data'] ?? null;
    }

    /**
     * Retrieves the short name of a Game to be returned, serves as the unique identifier for the game.
     * This is optional.
     *
     * @return string|null The game short name, or null if not available.
     */
    public function getGameShortName(): ?string
    {
        return $this->data['game_short_name'] ?? null;
    }
}