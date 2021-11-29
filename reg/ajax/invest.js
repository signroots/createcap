$("#invest-fr").on("submit", (e) => {
  e.preventDefault();
  let fdat = new FormData(document.getElementById("invest-fr"));
  $.post({
    url: "control_invest.php",
    processData: false,
    contentType: false,
    cache: false,
    data: fdat,
    dataType: "json",
    beforeSend: () =>
    {
      $("#sub-btn").text('Submitting ...')
      $("#sub-btn").attr('disabled',true)
    },
    success: (r) => {
      if (r.stat) {
        location.replace("after-invest.php?stat=1");
      } else {
        location.replace("after-invest.php?stat=0");
      }
    },
    error: (e) => {},
    complete: () =>
    {
      $("#sub-btn").attr('disabled', false)
      $("#sub-btn").text('Submit') 
    },
  });

});
