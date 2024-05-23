<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class Game
{
    use DataConstructor;

    /**
     * Retrieves the title of the game.
     * 
     * @return string|null The title of the game if available, otherwise null.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the description of the game.
     * 
     * @return string|null The description of the game if available, otherwise null.
     */
    public function getDescription(): ?string
    {
        return $this->data['description'] ?? null;
    }

    /**
     * Retrieves the array of PhotoSize for the game.
     * 
     * @return array|null The array of PhotoSize if available, otherwise null.
     */
    public function getPhoto(): ?array
    {
        return $this->data['photo'] ?? null;
    }

    /**
     * Retrieves the text of the game.
     * 
     * @return string|null The text of the game if available, otherwise null.
     */
    public function getText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    /**
     * Retrieves the array of MessageEntity for the text.
     * 
     * @return array|null The array of MessageEntity if available, otherwise null.
     */
    public function getTextEntities(): ?array
    {
        return $this->data['text_entities'] ?? null;
    }

    /**
     * Retrieves the Animation of the game.
     * 
     * @return Animation|null The Animation if available, otherwise null.
     */
    public function getAnimation(): ?Animation
    {
        return isset($this->data['animation']) ? new Animation($this->data['animation']) : null;
    }
}
