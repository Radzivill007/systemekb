jQuery(document).on("click", ".tab", function () {
  jQuery(this).addClass("active").siblings().removeClass("active");
  const tabs = jQuery(this)
    .closest("div.js_tabs")
    .find(".tabs_content")
    .children();
  tabs.hide();
  tabs.eq(jQuery(this).index()).css("display", "flex").hide().fadeIn(500);
});
