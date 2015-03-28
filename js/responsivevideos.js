jQuery(document).ready(function($) {
    // Responsive video JS to go along with CSS
    $('.VideoPreview > a').click(function() {
        // Add a delay so this code runs after Vanilla's current JS code adds in "display: inline;"
        $(this).parent().parent().find('.VideoPlayer').delay(3000).attr('style', 'display: block;');
    });
});
