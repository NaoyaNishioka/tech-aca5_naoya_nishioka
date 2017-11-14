$(function() {
  var radios = $("input[name=logic]");

  radios.on("change", function(e) {
    radios.closest("label").removeClass("selected");
    $(e.target).closest("label").addClass("selected");
  });

  radios.filter(":checked").trigger("change");
});