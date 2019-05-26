const $ = require('jquery');


$(document).ready(init);

function init() {

  setTimeout(function() {

    $(".alert").fadeOut(1000);
  }, 3000);
}
