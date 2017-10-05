$(document).ready(function () {
    console.log("document loaded");

    $("#client").change( function ()
    {
        var opt = $('option:selected', this);
        console.log(opt);
        //console.log("huyctfjvgyuh");
        var id = this.value;
        //console.log(this)
        console.log(id);
        var url1 = "WebServices/?m=getcontacts&id=" + id;
        $.ajax({
            url: url1,
            type: 'POST',
            success: function (data)
            {
                if (data != null)
                {
                    var str = "";
                    obj = JSON.parse(data);
                    console.log(obj)
                    for (i = 0; i < obj.length; i++)
                    {
                        str = str + '<option value="' + obj[0].id + '">' + obj[0].name + ' ' + obj[0].lastname + '</option>';
                    }
                    $("#contactname").html(str);
                }

            }
        });

    });

    $("i.icontrash").off("click.ad").on("click.ad", function ()
    {
        var id = $(this).attr("id_suppr");
        var that = $(this).parents("div.list-group-item");
        //console.log(that);
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
                if (result)
                {
                    //console.log("ok "+id);
                    var url1 = "delete-requirement-" + id + ".html";
                    $.ajax({
                        url: url1,
                        type: 'POST',
                        success: function (data)
                        {
                            if (data == "true" || data == true)
                            {   
                                that.remove();
                            }

                        }
                    });
                }
            }
        });

    });

    $("i.iconpencil").off("click.ad").on("click.ad", function ()
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