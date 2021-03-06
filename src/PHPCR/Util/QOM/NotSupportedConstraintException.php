<?php

namespace PHPCR\Util\QOM;

use RuntimeException;

/**
 * A helper exception to report not yet implemented functionality.
 *
 * @license http://www.apache.org/licenses Apache License Version 2.0, January 2004
 * @license http://opensource.org/licenses/MIT MIT License
 */
class NotSupportedConstraintException extends RuntimeException
{
    /**
     * Create the exception with an explaining message.
     *
     * @param string $constraint the constraint expression that is not supported
     */
    public function __construct($constraint)
    {
        $class = get_class($constraint);
        parent::__construct("$class is not supported by this query language");
    }
}
