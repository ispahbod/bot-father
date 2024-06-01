<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Poll
{
    use DataConstructor;

    /**
     * Retrieves the unique poll identifier.
     *
     * @return string The unique identifier of the poll.
     */
    public function getId(): string
    {
        return $this->data['id'];
    }

    /**
     * Retrieves the poll question.
     *
     * @return string The question of the poll, 1-300 characters.
     */
    public function getQuestion(): string
    {
        return $this->data['question'];
    }

    /**
     * Retrieves special entities like custom emojis that appear in the poll question.
     *
     * @return array|null An array of MessageEntity objects if present, or null otherwise.
     */
    public function getQuestionEntities(): ?array
    {
        return isset($this->data['question_entities']) ? array_map(function ($entity) {
            return new MessageEntity($entity);
        }, $this->data['question_entities']) : null;
    }

    /**
     * Retrieves the list of poll options.
     *
     * @return array|null An array of PollOption objects if present, or null otherwise.
     */
    public function getOptions(): ?array
    {
        return isset($this->data['options']) ? array_map(function ($option) {
            return new PollOption($option);
        }, $this->data['options']) : null;
    }

    /**
     * Retrieves the total number of users that voted in the poll.
     *
     * @return int The total voter count.
     */
    public function getTotalVoterCount(): int
    {
        return $this->data['total_voter_count'];
    }

    /**
     * Checks if the poll is closed.
     *
     * @return bool True if the poll is closed, false otherwise.
     */
    public function isClosed(): bool
    {
        return $this->data['is_closed'] ?? false;
    }

    /**
     * Checks if the poll is anonymous.
     *
     * @return bool True if the poll is anonymous, false otherwise.
     */
    public function isAnonymous(): bool
    {
        return $this->data['is_anonymous'] ?? false;
    }

    /**
     * Retrieves the type of the poll.
     *
     * @return string The type of the poll, can be “regular” or “quiz”.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Checks if the poll allows multiple answers.
     *
     * @return bool True if multiple answers are allowed, false otherwise.
     */
    public function allowsMultipleAnswers(): bool
    {
        return $this->data['allows_multiple_answers'] ?? false;
    }

    /**
     * Retrieves the 0-based identifier of the correct answer option.
     *
     * @return int|null The identifier of the correct answer option if available, or null otherwise.
     */
    public function getCorrectOptionId(): ?int
    {
        return $this->data['correct_option_id'] ?? null;
    }

    /**
     * Retrieves the explanation text shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll.
     *
     * @return string|null The explanation text if available, or null otherwise.
     */
    public function getExplanation(): ?string
    {
        return $this->data['explanation'] ?? null;
    }

    /**
     * Retrieves special entities like usernames, URLs, bot commands, etc. that appear in the explanation.
     *
     * @return array|null An array of MessageEntity objects if present, or null otherwise.
     */
    public function getExplanationEntities(): ?array
    {
        return isset($this->data['explanation_entities']) ? array_map(function ($entity) {
            return new MessageEntity($entity);
        }, $this->data['explanation_entities']) : null;
    }

    /**
     * Retrieves the amount of time in seconds the poll will be active after creation.
     *
     * @return int|null The open period in seconds if available, or null otherwise.
     */
    public function getOpenPeriod(): ?int
    {
        return $this->data['open_period'] ?? null;
    }

    /**
     * Retrieves the point in time (Unix timestamp) when the poll will be automatically closed.
     *
     * @return int|null The close date as a Unix timestamp if available, or null otherwise.
     */
    public function getCloseDate(): ?int
    {
        return $this->data['close_date'] ?? null;
    }
}
