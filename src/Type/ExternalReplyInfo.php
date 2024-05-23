<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ExternalReplyInfo
{
    use DataConstructor;
    /**
     * Retrieves the origin of the message replied to by the given message.
     *
     * @return MessageOrigin|null The origin of the message if available, otherwise null.
     */
    public function getOrigin(): ?string
    {
        return $this->data['origin'] ?? null;
    }

    /**
     * Retrieves the chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     *
     * @return Chat|null The chat object if available, otherwise null.
     */
    public function getChat(): ?Chat
    {
        return isset($this->data['chat']) ? new Chat($this->data['chat']) : null;
    }

    /**
     * Retrieves the unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     *
     * @return int|null The unique message identifier if available, otherwise null.
     */
    public function getMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    /**
     * Retrieves the options used for link preview generation for the original message, if it is a text message.
     *
     * @return LinkPreviewOptions|null The link preview options if available, otherwise null.
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return isset($this->data['link_preview_options']) ? new LinkPreviewOptions($this->data['link_preview_options']) : null;
    }

    /**
     * Retrieves information about the animation if the message is an animation.
     *
     * @return Animation|null The animation object if available, otherwise null.
     */
    public function getAnimation(): ?Animation
    {
        return isset($this->data['animation']) ? new Animation($this->data['animation']) : null;
    }

    /**
     * Retrieves information about the audio file if the message is an audio file.
     *
     * @return Audio|null The audio object if available, otherwise null.
     */
    public function getAudio(): ?Audio
    {
        return isset($this->data['audio']) ? new Audio($this->data['audio']) : null;
    }

    /**
     * Retrieves information about the file if the message is a general file.
     *
     * @return Document|null The document object if available, otherwise null.
     */
    public function getDocument(): ?Document
    {
        return isset($this->data['document']) ? new Document($this->data['document']) : null;
    }

    /**
     * Retrieves available sizes of the photo if the message is a photo.
     *
     * @return array|null Array of PhotoSize objects if available, otherwise null.
     */
    public function getPhoto(): ?array
    {
        return isset($this->data['photo']) ? array_map(function ($photo) {
            return new PhotoSize($photo);
        }, $this->data['photo']) : null;
    }

    /**
     * Retrieves information about the sticker if the message is a sticker.
     *
     * @return Sticker|null The sticker object if available, otherwise null.
     */
    public function getSticker(): ?Sticker
    {
        return isset($this->data['sticker']) ? new Sticker($this->data['sticker']) : null;
    }

    /**
     * Retrieves information about the forwarded story if the message is a story.
     *
     * @return Story|null The story object if available, otherwise null.
     */
    public function getStory(): ?Story
    {
        return isset($this->data['story']) ? new Story($this->data['story']) : null;
    }

    /**
     * Retrieves information about the video if the message is a video.
     *
     * @return Video|null The video object if available, otherwise null.
     */
    public function getVideo(): ?Video
    {
        return isset($this->data['video']) ? new Video($this->data['video']) : null;
    }

    /**
     * Retrieves information about the video message if the message is a video note.
     *
     * @return VideoNote|null The video note object if available, otherwise null.
     */
    public function getVideoNote(): ?VideoNote
    {
        return isset($this->data['video_note']) ? new VideoNote($this->data['video_note']) : null;
    }

    /**
     * Retrieves information about the file if the message is a voice message.
     *
     * @return Voice|null The voice object if available, otherwise null.
     */
    public function getVoice(): ?Voice
    {
        return isset($this->data['voice']) ? new Voice($this->data['voice']) : null;
    }

    /**
     * Checks if the message media is covered by a spoiler animation.
     *
     * @return bool|null True if the media is covered by a spoiler, otherwise null.
     */
    public function hasMediaSpoiler(): ?bool
    {
        return $this->data['has_media_spoiler'] ?? null;
    }

    /**
     * Retrieves information about the contact if the message is a shared contact.
     *
     * @return Contact|null The contact object if available, otherwise null.
     */
    public function getContact(): ?Contact
    {
        return isset($this->data['contact']) ? new Contact($this->data['contact']) : null;
    }

    /**
     * Retrieves information about the dice if the message is a dice with a random value.
     *
     * @return Dice|null The dice object if available, otherwise null.
     */
    public function getDice(): ?Dice
    {
        return isset($this->data['dice']) ? new Dice($this->data['dice']) : null;
    }

    /**
     * Retrieves information about the game if the message is a game.
     *
     * @return Game|null The game object if available, otherwise null.
     */
    public function getGame(): ?Game
    {
        return isset($this->data['game']) ? new Game($this->data['game']) : null;
    }

    /**
     * Retrieves information about the scheduled giveaway if the message is a giveaway.
     *
     * @return Giveaway|null The giveaway object if available, otherwise null.
     */
    public function getGiveaway(): ?Giveaway
    {
        return isset($this->data['giveaway']) ? new Giveaway($this->data['giveaway']) : null;
    }

    /**
     * Retrieves information about the completed giveaway with public winners.
     *
     * @return GiveawayWinners|null The giveaway winners object if available, otherwise null.
     */
    public function getGiveawayWinners(): ?GiveawayWinners
    {
        return isset($this->data['giveaway_winners']) ? new GiveawayWinners($this->data['giveaway_winners']) : null;
    }

    /**
     * Retrieves information about the invoice if the message is an invoice for a payment.
     *
     * @return Invoice|null The invoice object if available, otherwise null.
     */
    public function getInvoice(): ?Invoice
    {
        return isset($this->data['invoice']) ? new Invoice($this->data['invoice']) : null;
    }

    /**
     * Retrieves information about the location if the message is a shared location.
     *
     * @return Location|null The location object if available, otherwise null.
     */
    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }

    /**
     * Retrieves information about the poll if the message is a native poll.
     *
     * @return Poll|null The poll object if available, otherwise null.
     */
    public function getPoll(): ?Poll
    {
        return isset($this->data['poll']) ? new Poll($this->data['poll']) : null;
    }

    /**
     * Retrieves information about the venue if the message is a venue.
     *
     * @return Venue|null The venue object if available, otherwise null.
     */
    public function getVenue(): ?Venue
    {
        return isset($this->data['venue']) ? new Venue($this->data['venue']) : null;
    }
}
