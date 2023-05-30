$(".signup").on("mouseover", () => {
    $(".board").addClass("right");
    $(".signup").addClass("font-swell");
    $(".signin").removeClass("font-swell");
  });
  $(".signup").on("mouseout", () => {
    $(".board").removeClass("right");
    $(".signin").addClass("font-swell");
    $(".signup").removeClass("font-swell");
  });
  