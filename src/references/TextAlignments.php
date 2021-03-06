<?php

namespace eznio\tabler\references;


class TextAlignments
{
    const TEXT_ALIGN_LEFT = STR_PAD_RIGHT;
    const TEXT_ALIGN_RIGHT = STR_PAD_LEFT;
    const TEXT_ALIGN_CENTER = STR_PAD_BOTH;
    const TEXT_ALIGN_INHERIT = null;

    const ALL = [
        self::TEXT_ALIGN_CENTER,
        self::TEXT_ALIGN_LEFT,
        self::TEXT_ALIGN_RIGHT,
        self::TEXT_ALIGN_INHERIT
    ];
}
