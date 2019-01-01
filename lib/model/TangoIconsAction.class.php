<?php
/**
 * Names of actions icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsAction
{
    const
    /*
     * Address book with a flare in the top right corner
     */
    ADDRESS_BOOK_NEW = 'address-book-new';
    const /*
     * Calendar with an area roughly circled (as if with a thick pen), and a
     * flare in the top right corner
     */
    APPOINTMENT_NEW = 'appointment-new';
    const BOOKMARK_NEW = 'bookmark-new';
    const /*
     * Business card with a flare in the top right corner
     */
    CONTACT_NEW = 'contact-new';
    const /*
     * A paper sheet with a flare in the top right corner
     */
    DOCUMENT_NEW = 'document-new';
    const /*
     * Page emerging from folder
     */
    DOCUMENT_OPEN = 'document-open';
    const /*
     * A printer with a arrow pointing up from it
     */
    DOCUMENT_PRINT = 'document-print';
    const /*
     * The printer icon inside a computer screen?
     */
    DOCUMENT_PRINT_PREVIEW = 'document-print-preview';
    const /*
     * Page overlaid with an "i" information symbol
     */
    DOCUMENT_PROPERTIES = 'document-properties';
    const /*
     * Hard drive with an arrow pointing onto it
     */
    DOCUMENT_SAVE = 'document-save';
    const /*
     * Hard drive with an arrow pointing onto it. Additionaly a text entry
     * widget with some text overlaid.
     */
    DOCUMENT_SAVE_AS = 'document-save-as';
    const EDIT_CLEAR = 'edit-clear';
    const /*
     * Two offset, overlapping text documents
     */
    EDIT_COPY = 'edit-copy';
    const /*
     * Pair of scissors
     */
    EDIT_CUT = 'edit-cut';
    const /*
     * A shredder
     */
    EDIT_DELETE = 'edit-delete';
    const EDIT_FIND = 'edit-find';
    const EDIT_FIND_REPLACE = 'edit-find-replace';
    const /*
     * Clipboard with document
     */
    EDIT_PASTE = 'edit-paste';
    const /*
     * Arrow making a leap up, then ends pointing right
     */
    EDIT_REDO = 'edit-redo';
    const EDIT_SELECT_ALL = 'edit-select-all';
    const /*
     * Arrow making a leap up, then ends pointing left
     */
    EDIT_UNDO = 'edit-undo';
    const FOLDER_NEW = 'folder-new';
    const /*
     * Block of light indented lines, with bold unindented lines in the middle
     */
    FORMAT_INDENT_LESS = 'format-indent-less';
    const /*
     * Block of light unindented lines, with bold indented lines in the middle
     */
    FORMAT_INDENT_MORE = 'format-indent-more';
    const /*
     * Block of centered lines of various lengths
     */
    FORMAT_JUSTIFY_CENTER = 'format-justify-center';
    const /*
     * Block of justified lines, with the last line aligned left/right in
     * LTR/RTL locales
     */
    FORMAT_JUSTIFY_FILL = 'format-justify-fill';
    const /*
     * Block of left-aligned lines of various lengths
     */
    FORMAT_JUSTIFY_LEFT = 'format-justify-left';
    const /*
     * Block of right-aligned lines of various lengths
     */
    FORMAT_JUSTIFY_RIGHT = 'format-justify-right';
    const /*
     * Bold sans-serif "A"
     */
    FORMAT_TEXT_BOLD = 'format-text-bold';
    const /*
     * Italic sans-serif "A"
     */
    FORMAT_TEXT_ITALIC = 'format-text-italic';
    const /*
     * Sans-serif "A" with strikethrough
     */
    FORMAT_TEXT_STRIKETHROUGH = 'format-text-strikethrough';
    const /*
     * Underlined sans-serif "A"
     */
    FORMAT_TEXT_UNDERLINE = 'format-text-underline';
    const /*
     * Arrow pointing down with a horizontal line at the arrow tip
     */
    GO_BOTTOM = 'go-bottom';
    const /*
     * Arrow pointing down
     */
    GO_DOWN = 'go-down';
    const /*
     * Arrow pointing to the left (for ltr-languages) with a vertical line at
     * the arrow tip
     */
    GO_FIRST = 'go-first';
    const /*
     * House
     */
    GO_HOME = 'go-home';
    const /*
     * Arrow making a leap up, right and then pointing down with its tip at
     * its baseline
     */
    GO_JUMP = 'go-jump';
    const /*
     * Arrow pointing to the right (for ltr-languages) with a vertical line at
     * the arrow tip
     */
    GO_LAST = 'go-last';
    const /*
     * Arrow pointing to the right (for ltr-languages)
     */
    GO_NEXT = 'go-next';
    const /*
     * Arrow pointing to the left (for ltr-languages)
     */
    GO_PREVIOUS = 'go-previous';
    const /*
     * Arrow pointing up with a horizontal line at the arrow tip
     */
    GO_TOP = 'go-top';
    const /*
     * Arrow pointing up
     */
    GO_UP = 'go-up';
    const /*
     * Bold "+" symbol
     */
    LIST_ADD = 'list-add';
    const /*
     * Bold "−" symbol
     */
    LIST_REMOVE = 'list-remove';
    const MAIL_FORWARD = 'mail-forward';
    const /*
     * Rubbish bag
     */
    MAIL_MARK_JUNK = 'mail-mark-junk';
    const /*
     * Rubbish bag with a (black) diagonal line through it
     */
    MAIL_MARK_NOTJUNK = 'mail-mark-notjunk';
    const /*
     * Page with a pencil writing on it
     */
    MAIL_MESSAGE_NEW = 'mail-message-new';
    const /*
     * Two arrows curling back
     */
    MAIL_REPLY_ALL = 'mail-reply-all';
    const /*
     * One arrow curling back
     */
    MAIL_REPLY_SENDER = 'mail-reply-sender';
    const /*
     * Circle of two arrows chasing each other
     */
    MAIL_SEND_RECEIVE = 'mail-send-receive';
    const MEDIA_EJECT = 'media-eject';
    const /*
     * Two solid (black) vertical rectangles
     */
    MEDIA_PLAYBACK_PAUSE = 'media-playback-pause';
    const /*
     * Solid (black) equilateral triangle pointing right
     */
    MEDIA_PLAYBACK_START = 'media-playback-start';
    const /*
     * Solid (black) square
     */
    MEDIA_PLAYBACK_STOP = 'media-playback-stop';
    const /*
     * Solid (maroon) circle
     */
    MEDIA_RECORD = 'media-record';
    const /*
     * Two solid (black) equilateral triangles touching, pointing left
     */
    MEDIA_SEEK_BACKWARD = 'media-seek-backward';
    const /*
     * Two solid (black) equilateral triangles touching, pointing right
     */
    MEDIA_SEEK_FORWARD = 'media-seek-forward';
    const /*
     * Solid (black) equilateral triangle pointing left, touching a vertical
     * rectangle
     */
    MEDIA_SKIP_BACKWARD = 'media-skip-backward';
    const /*
     * Solid (black) equilateral triangle pointing right, touching a vertical
     * rectangle
     */
    MEDIA_SKIP_FORWARD = 'media-skip-forward';
    const PROCESS_STOP = 'process-stop';
    const /*
     * Stylized keyhole in a stylized screen
     */
    SYSTEM_LOCK_SCREEN = 'system-lock-screen';
    const /*
     * Stylized keyhole
     */
    SYSTEM_LOG_OUT = 'system-log-out';
    const /*
     * Magnifying glass
     */
    SYSTEM_SEARCH = 'system-search';
    const SYSTEM_SHUTDOWN = 'system-shutdown';
    const TAB_NEW = 'tab-new';
    const /*
     * Stylized screen with arrows pulling each corner outward
     */
    VIEW_FULLSCREEN = 'view-fullscreen';
    const /*
     * Circle of two arrows chasing each other
     */
    VIEW_REFRESH = 'view-refresh';
    const WINDOW_NEW = 'window-new';

    public static function getContext()
    {
        return 'actions';
    }
}
