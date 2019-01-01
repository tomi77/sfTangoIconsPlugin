<?php
/**
 * Names of emblems icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsEmblem
{
    const
    /*
     * A heart
     */
    EMBLEM_FAVORITE = 'emblem-favorite';
    const EMBLEM_IMPORTANT = 'emblem-important';
    const EMBLEM_PHOTOS = 'emblem-photos';
    const EMBLEM_READONLY = 'emblem-readonly';
    const EMBLEM_SYMBOLIC_LINK = 'emblem-symbolic-link';
    const EMBLEM_SYSTEM = 'emblem-system';
    const EMBLEM_UREADABBLE = 'emblem-unreadable';

    public static function getContext()
    {
        return 'emblems';
    }
}
