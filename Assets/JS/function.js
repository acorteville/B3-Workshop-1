    $( document ).ready(function() {
        //console.log( "document loaded" );
        
        $("i.icontrash").off("click.ad").on( "click.ad", function() 
        {
            var id = $(this).attr("id_suppr");
            var that = $(this).parents("li.list-group-item");
                bootbox.confirm({
                    message: "Voulez-vous vraiment supprimer ce besoin?",
                    buttons: {
                        confirm: {
                            label: 'Oui',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'Non',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result)
                        {
                           //console.log("ok "+id);
                            var url1 = "Models/m_Models.php";
                            $.ajax({
                              url: url1,
                              type:'POST',
                              data: {
                               fonction:'deleteRequirement',
                               id : id
                         },
                               success: function(data)
                               {
                                   console.log(data);

                                   console.log(that);
                                   that.remove();
                                }
                             });       
                        }
                    }
                });
           
        }); 
        
         $("i.iconpencil").off("click.ad").on( "click.ad", function() 
        {
            var id = $(this).attr("id_edit");
            console.log(id);
            
        }); 
    });
    /*
$(window).load(function(){

     
    
      $(".clikToAdd").click(function() {
      
      var raison   = $("#raison").val();
      var titre  = $("#titre2").val();
      var descritpif  = $("#descritpif").val();
      var urgence  = $("#urgence").val();
      
      var delay = ( function() {
            var timer = 0;
            return function(callback, ms) {
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();
      
      console.log("raison : " + raison + " titre : " +titre + " descriptif : " + descritpif + " urgence : " + urgence )
      
          $.ajax({
            url: 'include/functions.php',
            type:'POST',
            data: {
             fonction:'addToDo',
             params: {raison: raison, titre: titre, descritpif: descritpif, urgence: urgence}
       },
             success: function(data)
             {
                if (data !=  false) {
                  $("#form")[0].reset();
                  $("#sucess").removeClass("hide");
                  setTimeout(
                    function() 
                    {
                      $("#sucess").addClass("hide");
                    }, 5000);
                  //$("#sucess").addClass("hide");
                }
                else
                {
                    $("#problem").removeClass("hide");
                    setTimeout(
                    function() 
                    {
                      $("#problem").addClass("hide");
                    }, 5000);
                }
              }
           });        
      
    })
    })
    
    function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
          end = new Date().getTime();
       }
     }*/