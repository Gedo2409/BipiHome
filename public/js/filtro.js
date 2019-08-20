$(document).ready(function () {
  $('.provider').show();

  $('.subcategory-checkbox-container').find('input:checkbox').on('click', function () {
    var post = $('.provider').hide();

    var elements = $('.subcategory-checkbox-container').find('input:checked');

    if (elements.length) {
      elements.each(function () {
        post.filter('.' + this.id).show();
      });
    }
    else
      post.show();
  });
});