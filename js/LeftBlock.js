//left Block Sections

$(document).ready(function(){
  $('.leftBlock__section li:first-child').addClass('leftBlock__section--btn');
  $('.leftBlock__section li:not(:first-child)').addClass('leftBlock__section--li');

  $('.leftBlock__section--btn').on( 'click', function(){
    $('.leftBlock__section--btn').toggleClass('select', false);
    $('.leftBlock__section').toggleClass('leftBlock__section--select', false);
    var $this =$(this);
    $this.toggleClass('select');
    $this.parent().toggleClass('leftBlock__section--select');
  });
});