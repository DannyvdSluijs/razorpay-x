<?php
/**
 * *
 *  *  * Copyright (C) OPTIMO TECHNOLOGIES  - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>ManiKandan<smanikandanit@gmail.com >
 *  *
 *
 */
declare(strict_types=1);

namespace OptimoApps\RazorPayX\Entity;

/**
 * Class Contact.
 */
class Contact
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $entity;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $contact;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $reference_id;

    /**
     * @var string
     */
    public string $batch_id;

    /**
     * @var bool
     */
    public bool $active;


    /**
     * @var array
     */
    public array $notes;


    /**
     * @var int
     */
    public int $created_at;

    /**
     * @var int
     */
    public int $from;

    /**
     * @var int
     */
    public int $to;

    /**
     * @var int
     */
    public int $count;

    /**
     * @var int
     */
    public int $skip;

    /**
     * Convert Object to Array.
     */
    public function toArray(): array
    {
        return array_filter((array)get_object_vars($this), static function ($val) {
            return !is_null($val);
        });
    }
}
