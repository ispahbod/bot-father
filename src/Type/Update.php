<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class Update
{
    use DataConstructor;

    /**
     * Retrieves the update's unique identifier.
     * 
     * @return int|null The update's unique identifier if available, otherwise null.
     */
    public function getUpdateId(): ?int
    {
        return $this->data['update_id'] ?? null;
    }

    /**
     * Retrieves the new incoming message.
     * 
     * @return Message|null The new incoming message if available, otherwise null.
     */
    public function getMessage(): ?Message
    {
        return isset($this->data['message']) ? new Message($this->data['message']) : null;
    }

    /**
     * Retrieves the new version of a message that was edited.
     * 
     * @return Message|null The edited message if available, otherwise null.
     */
    public function getEditedMessage(): ?Message
    {
        return isset($this->data['edited_message']) ? new Message($this->data['edited_message']) : null;
    }

    /**
     * Retrieves the new incoming channel post.
     * 
     * @return Message|null The new incoming channel post if available, otherwise null.
     */
    public function getChannelPost(): ?Message
    {
        return isset($this->data['channel_post']) ? new Message($this->data['channel_post']) : null;

    }

    /**
     * Retrieves the new version of a channel post that was edited.
     * 
     * @return Message|null The edited channel post if available, otherwise null.
     */
    public function getEditedChannelPost(): ?Message
    {
        return isset($this->data['edited_channel_post']) ? new Message($this->data['edited_channel_post']) : null;
    }

    /**
     * Retrieves the business connection update.
     * 
     * @return BusinessConnection|null The business connection update if available, otherwise null.
     */
    public function getBusinessConnection(): ?BusinessConnection
    {
        return isset($this->data['business_connection']) ? new BusinessConnection($this->data['business_connection']) : null;

    }

    /**
     * Retrieves the new message from a connected business account.
     * 
     * @return Message|null The new business message if available, otherwise null.
     */
    public function getBusinessMessage(): ?Message
    {
        return isset($this->data['business_message']) ? new Message($this->data['business_message']) : null;

    }

    /**
     * Retrieves the new version of a message from a connected business account that was edited.
     * 
     * @return Message|null The edited business message if available, otherwise null.
     */
    public function getEditedBusinessMessage(): ?Message
    {
        return isset($this->data['edited_business_message']) ? new Message($this->data['edited_business_message']) : null;
    }

    /**
     * Retrieves the deleted business messages update.
     * 
     * @return BusinessMessagesDeleted|null The deleted business messages update if available, otherwise null.
     */
    public function getDeletedBusinessMessages(): ?BusinessMessagesDeleted
    {
        return isset($this->data['deleted_business_messages']) ? new BusinessMessagesDeleted($this->data['deleted_business_messages']) : null;
    }

    /**
     * Retrieves the message reaction update.
     * 
     * @return MessageReactionUpdated|null The message reaction update if available, otherwise null.
     */
    public function getMessageReaction(): ?MessageReactionUpdated
    {
        return isset($this->data['message_reaction']) ? new MessageReactionUpdated($this->data['message_reaction']) : null;
    }

    /**
     * Retrieves the message reaction count update.
     * 
     * @return MessageReactionCountUpdated|null The message reaction count update if available, otherwise null.
     */
    public function getMessageReactionCount(): ?MessageReactionCountUpdated
    {
        return isset($this->data['message_reaction_count']) ? new MessageReactionCountUpdated($this->data['message_reaction_count']) : null;

    }

    /**
     * Retrieves the new incoming inline query.
     * 
     * @return InlineQuery|null The new incoming inline query if available, otherwise null.
     */
    public function getInlineQuery(): ?InlineQuery
    {
        return isset($this->data['inline_query']) ? new InlineQuery($this->data['inline_query']) : null;

    }

    /**
     * Retrieves the chosen inline result.
     * 
     * @return ChosenInlineResult|null The chosen inline result if available, otherwise null.
     */
    public function getChosenInlineResult(): ?ChosenInlineResult
    {
        return isset($this->data['chosen_inline_result']) ? new ChosenInlineResult($this->data['chosen_inline_result']) : null;

    }

    /**
     * Retrieves the new incoming callback query.
     * 
     * @return CallbackQuery|null The new incoming callback query if available, otherwise null.
     */
    public function getCallbackQuery(): ?CallbackQuery
    {
        return isset($this->data['callback_query']) ? new CallbackQuery($this->data['callback_query']) : null;
    }

    /**
     * Retrieves the new incoming shipping query.
     * 
     * @return ShippingQuery|null The new incoming shipping query if available, otherwise null.
     */
    public function getShippingQuery(): ?ShippingQuery
    {
        return isset($this->data['shipping_query']) ? new ShippingQuery($this->data['shipping_query']) : null;

    }

    /**
     * Retrieves the new incoming pre-checkout query.
     * 
     * @return PreCheckoutQuery|null The new incoming pre-checkout query if available, otherwise null.
     */
    public function getPreCheckoutQuery(): ?PreCheckoutQuery
    {
        return isset($this->data['pre_checkout_query']) ? new PreCheckoutQuery($this->data['pre_checkout_query']) : null;

    }

    /**
     * Retrieves the new poll state.
     * 
     * @return Poll|null The new poll state if available, otherwise null.
     */
    public function getPoll(): ?Poll
    {
        return isset($this->data['poll']) ? new Poll($this->data['poll']) : null;

    }

    /**
     * Retrieves the poll answer update.
     * 
     * @return PollAnswer|null The poll answer update if available, otherwise null.
     */
    public function getPollAnswer(): ?PollAnswer
    {
        return isset($this->data['poll_answer']) ? new PollAnswer($this->data['poll_answer']) : null;
    }

    /**
     * Retrieves the bot's chat member status update.
     * 
     * @return ChatMemberUpdated|null The bot's chat member status update if available, otherwise null.
     */
    public function getMyChatMember(): ?ChatMemberUpdated
    {
        return isset($this->data['my_chat_member']) ? new ChatMemberUpdated($this->data['my_chat_member']) : null;

    }

    /**
     * Retrieves the chat member status update.
     * 
     * @return ChatMemberUpdated|null The chat member status update if available, otherwise null.
     */
    public function getChatMember(): ?ChatMemberUpdated
    {
        return isset($this->data['chat_member']) ? new ChatMemberUpdated($this->data['chat_member']) : null;
    }

    /**
     * Retrieves the chat join request.
     * 
     * @return ChatJoinRequest|null The chat join request if available, otherwise null.
     */
    public function getChatJoinRequest(): ?ChatJoinRequest
    {
        return isset($this->data['chat_join_request']) ? new ChatJoinRequest($this->data['chat_join_request']) : null;
    }

    /**
     * Retrieves the chat boost update.
     * 
     * @return ChatBoostUpdated|null The chat boost update if available, otherwise null.
     */
    public function getChatBoost(): ?ChatBoostUpdated
    {
        return isset($this->data['chat_boost']) ? new ChatBoostUpdated($this->data['chat_boost']) : null;

    }

    /**
     * Retrieves the removed chat boost update.
     * 
     * @return ChatBoostRemoved|null The removed chat boost update if available, otherwise null.
     */
    public function getRemovedChatBoost(): ?ChatBoostRemoved
    {
        return isset($this->data['removed_chat_boost']) ? new ChatBoostRemoved($this->data['removed_chat_boost']) : null;

    }
}