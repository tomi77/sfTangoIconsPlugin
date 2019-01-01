<?php
/**
 * Names of places icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsPlace
{
    const
    FOLDER_REMOTE = 'folder-remote';
    const FOLDER_SAVED_SEARCH = 'folder-saved-search';
    const FOLDER = 'folder';
    const NETWORK_SERVER = 'network-server';
    const NETWORK_WORKGROUP = 'network-workgroup';
    const START_HERE = 'start-here';
    const USER_DESKTOP = 'user-desktop';
    const USER_HOME = 'user-home';
    const USER_TRASH = 'user-trash';

    public static function getContext()
    {
        return 'places';
    }
}
