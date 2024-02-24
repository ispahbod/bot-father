<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Constant\ApiMethod;
use LaravelBot\BotFather\Constant\ChatActionType;
use LaravelBot\BotFather\Field\SendChatActionField;
use LaravelBot\BotFather\Trait\DataTokenConstructor;
use LaravelBot\BotFather\Trait\HttpResponseApiMethod;

class ChatAction
{
    use HttpResponseApiMethod;
    use DataTokenConstructor;

    private function sendAction(string $action): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, [
            ...$this->data,
            SendChatActionField::ACTION => $action
        ]);
        return empty($response[1]);
    }

    public function Typing(): bool
    {
        return $this->sendAction(ChatActionType::TYPING);
    }

    public function UploadVideo(): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_VIDEO);
    }

    public function RecordVideo(): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO);
    }

    public function RecordVideoNote(): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO_NOTE);
    }

    public function UploadVideoNote(): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO_NOTE);
    }

    public function ChooseSticker(): bool
    {
        return $this->sendAction(ChatActionType::CHOOSE_STICKER);
    }

    public function UploadDocument(): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_DOCUMENT);
    }

    public function UploadVoice(): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_VOICE);
    }

    public function UploadPhoto(): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_PHOTO);
    }

    public function FindLocation(): bool
    {
        return $this->sendAction(ChatActionType::FIND_LOCATION);
    }

    public function RecordVoice(): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VOICE);
    }
}
