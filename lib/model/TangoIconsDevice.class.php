<?php
/**
 * Names of devices icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsDevice
{
    const
    /*
     * A circuit board with a small note or speaker in the corner?
     */
    AUDIO_CARD = 'audio-card';
    const /*
     * Microphone
     */
    AUDIO_INPUT_MICROPHONE = 'audio-input-microphone';
    const BATTERY = 'battery';
    const CAMERA_PHOTO = 'camera-photo';
    const /*
     * Video camera
     */
    CAMERA_VIDEO = 'camera-video';
    const /*
     * Computer
     */
    COMPUTER = 'computer';
    const DRIVE_HARDDISK = 'drive-harddisk';
    const DRIVE_OPTICAL = 'drive-optical';
    const DRIVE_REMOVABLE_MEDIA = 'drive-removable-media';
    const /*
     * Joystick
     */
    INPUT_GAMING = 'input-gaming';
    const /*
     * A keyboard
     */
    INPUT_KEYBOARD = 'input-keyboard';
    const /*
     * A computer mouse
     */
    INPUT_MOUSE = 'input-mouse';
    const MEDIA_FLASH = 'media-flash';
    const MEDIA_FLOPPY = 'media-floppy';
    const MEDIA_OPTICAL = 'media-optical';
    const MULTIMEDIA_PLAYER = 'multimedia-player';
    const NETWORK_WIRED = 'network-wired';
    const NETWORK_WIRELESS = 'network-wireless';
    const PRINTER = 'printer';
    const VIDEO_DISPLAY = 'video-display';

    public static function getContext()
    {
        return 'devices';
    }
}
