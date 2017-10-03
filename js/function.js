    $( document ).ready(function() {
        console.log( "document loaded" );
        
        $("#connexion").off("click.ad").on( "click.ad", function() 
        {
          var email = $("#email").val();
          console.log(email );
          $.ajax({
            url: "http://127.0.0.1/B3-Workshop-1/Models.php",
            function : loginUser,
            param : {
                email : email
            },
            success: function(data)
            {
                if (data !=  false) {
                    console.log(" connexion 1 ");
                }
                   else
                 { 
                     console.log("pb connexion");
                 }
            },
            fail : function(data)
            {
                console.log(data);
            },
            default: function()
            {
                console.log("def");
            }
         });
        });
        console.log('meuh');
    });