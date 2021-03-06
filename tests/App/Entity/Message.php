<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NotificationBundle\Tests\App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\NotificationBundle\Entity\BaseMessage;

/**
 * @ORM\Entity
 * @ORM\Table(name="notification__message")
 */
class Message extends BaseMessage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
}
