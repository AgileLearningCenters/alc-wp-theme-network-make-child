/*!
 * Script for initializing globally-used functions.
 *
 * @since 1.0.0
 */

// Copy builder section border background to border color

jQuery('.after-arrow').each(function(){
  var backgroundColor = jQuery(this).css('backgroundColor');
  jQuery(this).css('borderColor',backgroundColor);
});