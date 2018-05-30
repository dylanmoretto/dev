
/*$(document).ready(function() {
    $(".cat").click(function() {
        var id = $(this).attr('product')
            //alert("On choisie l'ID : " + id );
        $.ajax({
            url: 'show/' + id, // le nom du fichier indiqué dans le formulaire
            type: 'POST', // la méthode indiquée dans le formulaire (get ou post)
            data: 'id=' + id, // je sérialise les données, ici les $_POST
            success: function (html) { // je récupère la réponse du fichier PHP
                $("#result").text(html); // ou le résultat est affiché 
            }
        });
    })
});
*/


$(document).ready(function() {
    $('.add').off('click');
    $(".add").click(function() {
        var id = $(this).attr('product')
        var typeP = $(this).attr('typeP')
        $.ajax({
            url: 'add', // le nom du fichier indiqué dans le formulaire
            type: 'POST', // la méthode indiquée dans le formulaire (get ou post)
            data: 'id=' + id +'&typeP=' + typeP, // je sérialise les données, ici les $_POST
            success: function (html) { // je récupère la réponse du fichier PHP
                $("#result").text(html); // ou le résultat est affiché 
                $('#total').html(html)
            }
        }); 

        $.ajax({
            url: 'panier',
            type: 'POST',
            data: 'id=' +id,
            success:function(html) {                
                $('#tablePanier').html(html)
            }
        })
    })
});



$(document).ready(function(){
    //Examples of how to assign the Colorbox event to elements
    $(".group1").colorbox({rel:'group1'});
    $(".group2").colorbox({rel:'group2', transition:"fade"});
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
    $(".group4").colorbox({rel:'group4', slideshow:true});
    $(".ajax").colorbox();
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
    $(".inline").colorbox({inline:true, width:"50%"});
    $(".callbacks").colorbox({
        onOpen:function(){ alert('onOpen: colorbox is about to open'); },
        onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
        onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
        onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
        onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });

    $('.non-retina').colorbox({rel:'group5', transition:'none'})
    $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
    
    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){ 
        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});


