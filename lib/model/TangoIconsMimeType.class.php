<?php
/**
 * Names of mimetypes icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsMimeType
{
    const
    APPLICATION_CERTIFICATE = 'application-certificate';
    const APPLICATION_X_EXECUTABLE = 'application-x-executable';
    const AUDIO_X_GENERIC = 'audio-x-generic';
    const /*
     * Page with "A" printed on it
     */
    FONT_X_GENERIC = 'font-x-generic';
    const IMAGE_X_GENERIC = 'image-x-generic';
    const PACKAGE_X_GENERIC = 'package-x-generic';
    const TEXT_HTML = 'text-html';
    const TEXT_X_GENERIC_TEMPLATE = 'text-x-generic-template';
    const /*
     * Page with lines of unreadable text
     */
    TEXT_X_GENERIC = 'text-x-generic';
    const TEXT_X_SCRIPT = 'text-x-script';
    const VIDEO_X_GENERIC = 'video-x-generic';
    const X_OFFICE_ADDRESS_BOOK = 'x-office-address-book';
    const X_OFFICE_CALENDAR = 'x-office-calendar';
    const X_OFFICE_DOCUMENT_TEMPLATE = 'x-office-document-template';
    const /*
     * A fileable document containing some lines of text surrounding an image
     */
    X_OFFICE_DOCUMENT = 'x-office-document';
    const X_OFFICE_DRAWING_TEMPLATE = 'x-office-drawing-template';
    const X_OFFICE_DRAWING = 'x-office-drawing';
    const X_OFFICE_PRESENTATION_TEMPLATE = 'x-office-presentation-template';
    const X_OFFICE_PRESENTATION = 'x-office-presentation';
    const X_OFFICE_SPREADSHEET_TEMPLATE = 'x-office-spreadsheet-template';
    const /*
     * A document containing a spreadsheet and a pie chart in the bottom-right corner
     */
    X_OFFICE_SPREADSHEET = 'x-office-spreadsheet';

    public static function getContext()
    {
        return 'mimetypes';
    }
}
