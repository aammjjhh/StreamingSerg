  // Loadmore paginator  
  const recordCount = 5;
  var itemCount = recordCount;
  $(".loadmorepaginator").click(function() {
    var url = $(this).attr("href");
    var openElement = $(this).parent().prev();
    $.ajax({ 
      url:url, 
      data:{startingfrom:itemCount, recordcount:recordCount},
      success:function(html) {
        if ($(html).children().length == 0) {
          openElement.next().hide();  return;
        }
        itemCount += recordCount;
        openElement.append($(html).children());  destroywidgets(openElement.parent());  initializewidgets(openElement.parent());
      }
    });
    return false;
  });