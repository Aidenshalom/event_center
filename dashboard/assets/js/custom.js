$(document).ready(function () { 

    $(document).on('click', '.deletegallery', function (e) {
        
        e.preventDefault();
        
        var id = $(this).val();
        // alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this image!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'image_id':id,
                    'deletegallery':true
                },
                success: function (response) {
                    
                    if(response == 200){
                        swal("Success!", "Image Deleted Successfully!", "success");
                        $("#gallery_content").load(location.href + " #gallery_content");
                    }else if(response == 500){
                        swal("Error!", "Something went wrong!", "error");
                    }
                }
              });
            } 
          });
    });

    $(document).on('click', '.deletefaq', function (e) {
        
      e.preventDefault();
      
      var id = $(this).val();
      // alert(id);

      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              method: "POST",
              url: "code.php",
              data: {
                  'faqid':id,
                  'deletefaq':true
              },
              success: function (response) {
                  if(response == 200){
                      swal("Success!", "Faq Deleted Successfully!", "success");
                      $("#faq_content").load(location.href + " #faq_content");
                  }else if(response == 500){
                      swal("Error!", "Something went wrong!", "error");
                  }
              }
            });
          } 
        });
  });

    $(document).on('click', '.deletefeedback', function (e) {
          
      e.preventDefault();
      
      var id = $(this).val();
      // alert(id);

      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              method: "POST",
              url: "code.php",
              data: {
                  'feedbackid':id,
                  'deletefeedback':true
              },
              success: function (response) {
                  if(response == 200){
                      swal("Success!", "Feedback Deleted Successfully!", "success");
                      $("#feedback_content").load(location.href + " #feedback_content");
                  }else if(response == 500){
                      swal("Error!", "Something went wrong!", "error");
                  }
              }
            });
          } 
        });
  });   

  $(document).on('click', '.delete_booking', function (e) {
        
    e.preventDefault();
    
    var id = $(this).val();
    // alert(id);

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            method: "POST",
            url: "code.php",
            data: {
                'bookingid':id,
                'deletebooking':true
            },
            success: function (response) {
                if(response == 200){
                    swal("Success!", "Booking Deleted Successfully!", "success");
                    $("#booking_content").load(location.href + " #booking_content");
                }else if(response == 500){
                    swal("Error!", "Something went wrong!", "error");
                }
            }
          });
        } 
      });
  });   


  $(document).on('click', '.deletenewsletter', function (e) {
          
    e.preventDefault();
    
    var id = $(this).val();
    // alert(id);

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            method: "POST",
            url: "code.php",
            data: {
                'newsletterid':id,
                'deletenewsletter':true
            },
            success: function (response) {
                if(response == 200){
                    swal("Success!", "Newsletter Deleted Successfully!", "success");
                    $("#newsletter_content").load(location.href + " #newsletter_content");
                }else if(response == 500){
                    swal("Error!", "Something went wrong!", "error");
                }
            }
          });
        } 
      });
  });    

});