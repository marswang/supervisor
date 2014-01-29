<?php

/*
 * This file is part of the Indigo Supervisor package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Supervisor\Exception;

use Exception;

/**
 * Thrown in case of faulty XMLRPC response
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class SupervisorException extends Exception implements ExceptionInterface
{
}
