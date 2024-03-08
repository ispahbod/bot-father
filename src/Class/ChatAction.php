<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Constant\ChatActionType;
use Ispahbod\BotFather\Constant\ParseMode;
use Ispahbod\BotFather\Field\SendChatActionField;
use Ispahbod\BotFather\Trait\DataTokenConstructor;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;

class ChatAction
{
    use HttpResponseApiMethod;
    use DataTokenConstructor;

    private function sendAction(string $action, bool $exp): bool
    {
        if ($exp === true && $this->data['exp'] === true) {
            $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, [
                SendChatActionField::CHAT_ID => $this->data['chat_id'],
                SendChatActionField::ACTION => $action
            ]);
            return empty($response[1]);
        }
        return false;
    }

    public function Typing($exp = true): bool
    {
        return $this->sendAction(ChatActionType::TYPING, $exp);
    }

    public function UploadVideo($exp = true): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_VIDEO, $exp);
    }

    public function RecordVideo($exp = true): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO, $exp);
    }

    public function RecordVideoNote($exp = true): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO_NOTE, $exp);
    }

    public function UploadVideoNote($exp = true): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VIDEO_NOTE, $exp);
    }

    public function ChooseSticker($exp = true): bool
    {
        return $this->sendAction(ChatActionType::CHOOSE_STICKER, $exp);
    }

    public function UploadDocument($exp = true): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_DOCUMENT, $exp);
    }

    public function UploadVoice($exp = true): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_VOICE, $exp);
    }

    public function UploadPhoto($exp = true): bool
    {
        return $this->sendAction(ChatActionType::UPLOAD_PHOTO, $exp);
    }

    public function FindLocation($exp = true): bool
    {
        return $this->sendAction(ChatActionType::FIND_LOCATION, $exp);
    }

    public function RecordVoice($exp = true): bool
    {
        return $this->sendAction(ChatActionType::RECORD_VOICE, $exp);
    }
}
