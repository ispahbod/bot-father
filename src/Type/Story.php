<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Story
{
    use DataConstructor;

    /**
     * Retrieves the Chat that posted the story.
     *
     * @return Chat The Chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat'] ?? []);
    }

    /**
     * Retrieves the unique identifier for the story in the chat.
     *
     * @return int The story's unique identifier.
     */
    public function getId(): int
    {
        return $this->data['id'];
    }
}
