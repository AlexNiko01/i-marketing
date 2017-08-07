/**
 * @package Inline Spoilers
 */

jQuery(function () {
    jQuery(".accordion-item-title").on('click', function (event) {
        $this = jQuery(this);
        if ($this.hasClass("accordion-open")) {
            $this.removeClass("accordion-open");
            $this.addClass("collapsed");
            $this.prop('title', title.expand);
            $this.next().slideUp("fast");
        } else {
            $this.removeClass("collapsed");
            $this.addClass("accordion-open");
            $this.prop('title', title.collapse);
            $this.next().slideDown("fast");
        }
    });
});