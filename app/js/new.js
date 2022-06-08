$(window).on("load", function () {
  window.setTimeout(function () {
    $("#preloader").addClass("hide-preloader");
  }, 1000); //<-- Delay in milliseconds
});

$("#digital").hover(
  function () {
    $(this).siblings().addClass("hider");
  },
  function () {
    $(this).siblings().removeClass("hider");
  }
);

$("#live").hover(
  function () {
    $(this).siblings().addClass("hider");
  },
  function () {
    $(this).siblings().removeClass("hider");
  }
);

$("#direct").hover(
  function () {
    $(this).siblings().addClass("hider");
  },
  function () {
    $(this).siblings().removeClass("hider");
  }
);

function changeGridTemplateColumns(pattern) {
  TweenMax.to("#cover", 1, {
    gridTemplateColumns: pattern,
  });
}

$(document).ready(function () {
  $("#digital").mouseenter(function () {
    changeGridTemplateColumns("5fr 1fr 1fr");
  });

  $("#live").mouseenter(function () {
    changeGridTemplateColumns("1fr 5fr 1fr");
  });

  $("#direct").mouseenter(function () {
    changeGridTemplateColumns("1fr 1fr 5fr");
  });

  $("#cover").mouseleave(function () {
    changeGridTemplateColumns("1fr 1fr 1fr");
  });
});

