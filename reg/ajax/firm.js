$("#firm-fr").on("submit", (e) => {
  e.preventDefault();
  let fdat = new FormData(document.getElementById("firm-fr"));
  $.post({
    url: "control_firm.php",
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
    success: (r) =>
    {
      if (r.stat )
      {
        location.replace('after-firm.php?stat=1');
      } else
      {
        location.replace('after-firm.php?stat=0');
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

