$(document).ready(function(){
   autoDisp();
  $("#status").hide();
  $("#alert_confirmation").hide();
  $(".listViewer").footable();
  $('.listViewer').footable({
      breakpoints: {
        mamaBear: 1200,
        babyBear: 600
    }
  });

     $("#btn_submit").click(function(){
      var obj={ "places_id":$("input[name='places_id']").val(),
        "place_name":$("input[name='place_name']").val(),
                "place_location" :$("input[name='place_location']").val(),
                "place_description" :$("input[name='place_description']").val(),
                "place_classification" :$("input[name='place_classification']").val()  };
       $.ajax({
     		type:"POST",
     		url:"add_validation.php",
     		async:true,
     		data:obj,
     		success:function(data){
          $(".listViewer").append(data);
          $(document.location.reload(true));
          $("#alert_confirmation").dialog({
                 hide:"explode",
                 show:"bounce",
                 heigth: 200,
                 width: 350,
                 dragable: false,
                resizable: false,
                 modal: true,
                buttons:{
                 "Cancel":function(){
              $(this).dialog("close");
           }
          }
     
                });

     			
     		},
     		complete:function(data){
          alert("success");
      },
     		error:function(data){
              alert(data);

     		}
     	});
     	
     });
     function autoDisp(){
     $.ajax({
                 type:"POST",
                 url: "view.php",
                 data:{data:JSON.stringify($("#add_places").serializeArray())},
                 success: function(data){
                    $(".listViewer").html(data);
                 },
                 error: function(data){
                    alert("sayop");           
                 }

              });
     
     }
     
    
});

