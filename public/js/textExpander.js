$(function() {
  var rulesObject = {};
  $.getJSON("/snippets/json", function(data) {
      $.each(data, function(key, rule) {
        rulesObject[rule['abbreviation']] = rule['snippet'];
    });
  });

  var textArea = $("#text-area");

  textArea.keyup(replaceText(textArea, rulesObject));

  function replaceText($domInput, $rulesObject) {
    $domInput.keyup(function() {
      var userInput = $domInput.val();
      for (var rule in $rulesObject) {
        if(userInput.indexOf(rule) !== -1) {
          var replaceString = userInput.replace(rule, $rulesObject[rule]);
          $domInput.val(replaceString);
        }
      }
    })
  }

})
