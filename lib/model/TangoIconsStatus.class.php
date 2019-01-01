<?php
/**
 * Names of status icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsStatus
{
    const
    AUDIO_VOLUME_HIGH = 'audio-volume-high';
    const AUDIO_VOLUME_LOW = 'audio-volume-low';
    const AUDIO_VOLUME_MEDIUM = 'audio-volume-medium';
    const AUDIO_VOLUME_MUTED = 'audio-volume-muted';
    const /*
     * A battery with a yellow glow, yellow coloring
     */
    BATTERY_CAUTION = 'battery-caution';
    const DIALOG_ERROR = 'dialog-error';
    const DIALOG_INFORMATION = 'dialog-information';
    const DIALOG_WARNING = 'dialog-warning';
    const FOLDER_DRAG_ACCEPT = 'folder-drag-accept';
    const FOLDER_OPEN = 'folder-open';
    const FOLDER_VISITING = 'folder-visiting';
    const IMAGE_LOADING = 'image-loading';
    const IMAGE_MISSING = 'image-missing';
    const MAIL_ATTACHMENT = 'mail-attachment';
    const NETWORK_ERROR = 'network-error';
    const NETWORK_IDLE = 'network-idle';
    const NETWORK_OFFLINE = 'network-offline';
    const NETWORK_RECEIVE = 'network-receive';
    const NETWORK_TRANSMIT_RECEIVE = 'network-transmit-receive';
    const NETWORK_TRANSMIT = 'network-transmit';
    const NETWORK_WIRELESS_ENCRYPTED = 'network-wireless-encrypted';
    const PRINTER_ERROR = 'printer-error';
    const SOFTWARE_UPDATE_AVAILABLE = 'software-update-available';
    const SOFTWARE_UPDATE_URGENT = 'software-update-urgent';
    const USER_TRASH_FULL = 'user-trash-full';
    const WEATHER_CLEAR_NIGHT = 'weather-clear-night';
    const /*
     * Sun
     */
    WEATHER_CLEAR = 'weather-clear';
    const WEATHER_FEW_CLOUDS_NIGHT = 'weather-few-clouds-night';
    const /*
     * Sun partly overlaid by a cloud
     */
    WEATHER_FEW_CLOUDS = 'weather-few-clouds';
    const /*
     * Clouds
     */
    WEATHER_OVERCAST = 'weather-overcast';
    const WEATHER_SEVERE_ALERT = 'weather-severe-alert';
    const WEATHER_SHOWERS_SCATTERED = 'weather-showers-scattered';
    const WEATHER_SHOWERS = 'weather-showers';
    const WEATHER_SNOW = 'weather-snow';
    const /*
     * Cloud with lightning bolt
     */
    WEATHER_STORM = 'weather-storm';

    public static function getContext()
    {
        return 'status';
    }
}
