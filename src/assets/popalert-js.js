(function ($) {
    $.popup = function (options) {
        var settings = $.extend({
            message: 'Default message',
            duration: 5000,
            type: 'info'
        }, options);

        if (!$('.container-popup-alert').length) {
            $('<div class="container-popup-alert"></div>').appendTo('body');
        }

        // Create the popup-alert div dynamically
        var $popup = $('<div class="popup-alert"></div>').addClass('popup-' + settings.type);
        $popup.text(settings.message);

        // Function to show the popup-alert
        function showPopup() {
            $popup.hide().appendTo('.container-popup-alert').fadeIn();
        }

        // Function to hide and remove the popup-alert
        function hidePopup() {
            $popup.fadeOut(function () {
                $popup.remove();
            });
        }

        // Show the popup-alert
        showPopup();

        // Set a timeout to hide and remove the popup-alert after the specified duration
        setTimeout(function () {
            hidePopup();
        }, settings.duration);
    };
})(jQuery);
