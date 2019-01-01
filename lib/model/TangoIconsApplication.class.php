<?php
/**
 * Names of applications icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsApplication
{
    const
    /*
     * A handheld calculator
     */
    ACCESSORIES_CALCULATOR = 'accessories-calculator';
    const /*
     * A keyboard key displaying a character
     */
    ACCESSORIES_CHARACTER_MAP = 'accessories-character-map';
    const /*
     * A paper notepad
     */
    ACCESSORIES_TEXT_EDITOR = 'accessories-text-editor';
    const HELP_BROWSER = 'help-browser';
    const INTERNET_GROUP_CHAT = 'internet-group-chat';
    const INTERNET_MAIL = 'internet-mail';
    const INTERNET_NEWS_READER = 'internet-news-reader';
    const INTERNET_WEB_BROWSER = 'internet-web-browser';
    const OFFICE_CALENDAR = 'office-calendar';
    const PREFERENCES_DESKTOP_ACCESSIBILITY = 'preferences-desktop-accessibility';
    const PREFERENCES_DESKTOP_ASSISTIVE_TECHNOLOGY = 'preferences-desktop-assistive-technology';
    const /*
     * "A" (or locale equivalent) in a variety of overlaid fonts
     */
    PREFERENCES_DESKTOP_FONT = 'preferences-desktop-font';
    const PREFERENCES_DESKTOP_KEYBOARD_SHORTCUTS = 'preferences-desktop-keyboard-shortcuts';
    const /*
     * Globe
     */
    PREFERENCES_DESKTOP_LOCALE = 'preferences-desktop-locale';
    const PREFERENCES_DESKTOP_MULTIMEDIA = 'preferences-desktop-multimedia';
    const PREFERENCES_DESKTOP_REMOTE_DESKTOP = 'preferences-desktop-remote-desktop';
    const /*
     * Stylized screen displaying moon and stars
     */
    PREFERENCES_DESKTOP_SCREENSAVER = 'preferences-desktop-screensaver';
    const PREFERENCES_DESKTOP_THEME = 'preferences-desktop-theme';
    const PREFERENCES_DESKTOP_WALLPAPER = 'preferences-desktop-wallpaper';
    const PREFERENCES_SYSTEM_NETWORK_PROXY = 'preferences-system-network-proxy';
    const PREFERENCES_SYSTEM_SESSION = 'preferences-system-session';
    const PREFERENCES_SYSTEM_WINDOWS = 'preferences-system-windows';
    const SYSTEM_FILE_MANAGER = 'system-file-manager';
    const SYSTEM_INSTALLER = 'system-installer';
    const SYSTEM_SOFTWARE_UPDATE = 'system-software-update';
    const SYSTEM_USERS = 'system-users';
    const UTILITIES_SYSTEM_MONITOR = 'utilities-system-monitor';
    const /*
     * A computer screen with command prompt
     */
    UTILITIES_TERMINAL = 'utilities-terminal';

    public static function getContext()
    {
        return 'apps';
    }
}
