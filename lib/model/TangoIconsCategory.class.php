<?php
/**
 * Names of categories icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsCategory
{
    const
    APPLICATIONS_ACCESSORIES = 'applications-accessories';
    const /*
     * A yellow hard hat
     */
    APPLICATIONS_DEVELOPMENT = 'applications-development';
    const APPLICATIONS_GAMES = 'applications-games';
    const APPLICATIONS_GRAPHICS = 'applications-graphics';
    const APPLICATIONS_INTERNET = 'applications-internet';
    const APPLICATIONS_MULTIMEDIA = 'applications-multimedia';
    const APPLICATIONS_OFFICE = 'applications-office';
    const APPLICATIONS_OTHER = 'applications-other';
    const APPLICATIONS_SYSTEM = 'applications-system';
    const PREFERENCES_DESKTOP_PERIPHERALS = 'preferences-desktop-peripherals';
    const PREFERENCES_DESKTOP = 'preferences-desktop';
    const PREFERENCES_SYSTEM = 'preferences-system';

    public static function getContext()
    {
        return 'categories';
    }
}
