<?php
/**
 * *
 *  *  * Copyright (C) OPTIMO TECHNOLOGIES  - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>ManiKandan<smanikandanit@gmail.com >.
 */

namespace Optimoapps\RazorPayX\Entity;

class TransactionCollection
{
    public string $entity;

    public int $count;
    /**
     * @var Transaction[]
     */
    public $items;
}
