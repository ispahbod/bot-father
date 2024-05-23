<?php

namespace Ispahbod\BotFather\Field;

final class GetUserProfilePhotosField
{
    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';

    /**
     * Sequential number of the first photo to be returned. By default, all photos are returned.
     * @var int|null
     */
    public const OFFSET = 'offset';

    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @var int|null
     */
    public const LIMIT = 'limit';
}
