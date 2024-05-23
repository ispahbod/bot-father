<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageReactionUpdated
{
    use DataConstructor;

    /**
     * Retrieves the chat containing the message the user reacted to.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the unique identifier of the message inside the chat.
     *
     * @return int The message identifier.
     */
    public function getMessageId(): int
    {
        return $this->data['message_id'];
    }

    /**
     * Retrieves the user that changed the reaction, if the user isn't anonymous.
     * This is optional.
     *
     * @return User|null The user object, or null if the user is anonymous.
     */
    public function getUser(): ?User
    {
        return isset($this->data['user']) ? new User($this->data['user']) : null;
    }

    /**
     * Retrieves the chat on behalf of which the reaction was changed, if the user is anonymous.
     * This is optional.
     *
     * @return Chat|null The actor chat object, or null if the user is not anonymous.
     */
    public function getActorChat(): ?Chat
    {
        return isset($this->data['actor_chat']) ? new Chat($this->data['actor_chat']) : null;
    }

    /**
     * Retrieves the date of the change in Unix time.
     *
     * @return int The Unix timestamp of the reaction change.
     */
    public function getDate(): int
    {
        return $this->data['date'];
    }

    /**
     * Retrieves the previous list of reaction types that were set by the user.
     *
     * @return array An array of ReactionType objects.
     */
    public function getOldReaction(): array
    {
        return array_map(function ($reaction) {
            return new ReactionType($reaction);
        }, $this->data['old_reaction']);
    }

    /**
     * Retrieves the new list of reaction types that have been set by the user.
     *
     * @return array An array of ReactionType objects.
     */
    public function getNewReaction(): array
    {
        return array_map(function ($reaction) {
            return new ReactionType($reaction);
        }, $this->data['new_reaction']);
    }

}