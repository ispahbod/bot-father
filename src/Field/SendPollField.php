<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\InputPollOption;
use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\ReplyParameters;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardRemove;
use Ispahbod\BotFather\Type\ForceReply;

class SendPollField
{
    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent.
     * @var string|null
     */
    public const BUSINESS_CONNECTION_ID = 'business_connection_id';

    /**
     * Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * Required. Poll question, 1-300 characters.
     * @var string
     */
    public const QUESTION = 'question';

    /**
     * Optional. Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed.
     * @var string|null
     */
    public const QUESTION_PARSE_MODE = 'question_parse_mode';

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode.
     * @var array|null
     */
    public const QUESTION_ENTITIES = 'question_entities';

    /**
     * Required. A JSON-serialized list of 2-10 answer options.
     * @var array
     */
    public const OPTIONS = 'options';

    /**
     * Optional. True, if the poll needs to be anonymous, defaults to True.
     * @var bool|null
     */
    public const IS_ANONYMOUS = 'is_anonymous';

    /**
     * Optional. Poll type, “quiz” or “regular”, defaults to “regular”.
     * @var string|null
     */
    public const TYPE = 'type';

    /**
     * Optional. True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False.
     * @var bool|null
     */
    public const ALLOWS_MULTIPLE_ANSWERS = 'allows_multiple_answers';

    /**
     * Optional. 0-based identifier of the correct answer option, required for polls in quiz mode.
     * @var int|null
     */
    public const CORRECT_OPTION_ID = 'correct_option_id';

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing.
     * @var string|null
     */
    public const EXPLANATION = 'explanation';

    /**
     * Optional. Mode for parsing entities in the explanation. See formatting options for more details.
     * @var string|null
     */
    public const EXPLANATION_PARSE_MODE = 'explanation_parse_mode';

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode.
     * @var array|null
     */
    public const EXPLANATION_ENTITIES = 'explanation_entities';

    /**
     * Optional. Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
     * @var int|null
     */
    public const OPEN_PERIOD = 'open_period';

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
     * @var int|null
     */
    public const CLOSE_DATE = 'close_date';

    /**
     * Optional. Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
     * @var bool|null
     */
    public const IS_CLOSED = 'is_closed';

    /**
     * Optional. Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Optional. Protects the contents of the sent message from forwarding and saving.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Optional. Description of the message to reply to.
     * @var ReplyParameters|null
     */
    public const REPLY_PARAMETERS = 'reply_parameters';

    /**
     * Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    public const REPLY_MARKUP = 'reply_markup';
}