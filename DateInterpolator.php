<?php

namespace App\Http\Libraries;

use Codesleeve\Stapler\Interpolator;
use Codesleeve\Stapler\Interfaces\Attachment as AttachmentInterface;

class DateInterpolator extends Interpolator
{
    function __construct()
    {
        echo '<pre>';
            echo var_dump('ostia');
        echo '</pre>';
        die();
    }

    /**
     * Returns a sorted list of all interpolations.
     * We can easily add to the list of interpolations provided by
     * the base interpolator class. Let's register the ':foo' interpolation:
     *
     * @return array
     */
    protected function interpolations()
    {
        echo '<pre>';
            echo var_dump('yuju');
        echo '</pre>';
        die();
        $parentInterpolations = parent::interpolations();

        return array_merge($parentInterpolations, [':year' => 'year', ':month' => 'month', ':day' => 'day']);
    }


    protected function year(AttachmentInterface $attachment, $styleName = '')
    {
        return date('Y', strtotime($attachment->getInstance()->avatar_updated_at));
    }

    protected function month(AttachmentInterface $attachment, $styleName = '')
    {
        return date('m', strtotime($attachment->getInstance()->avatar_updated_at));
    }

    protected function day(AttachmentInterface $attachment, $styleName = '')
    {
        return date('d', strtotime($attachment->getInstance()->avatar_updated_at));
    }
}