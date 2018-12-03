

/*
 * controller js
 */


//variable globale
var dragged = false,
        maximize = false;

////////////////////////////


$(document).ready(function () {
//menu active
    $(".navbar-nav li a").click(function(){
        $(".navbar-nav li a").removeAttr('style');
        $(this).attr('style', "color: orange;");
    });
    // mise en forme de la fenetre radio et applle des page suivant les menus de navbar 
    //////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //
    $("#minimize").click(function () {
        maximize = false;
        $("#radio_tv").css({
            "opacity": "1",
            "top": "92%",
            "right": "auto"
        });
        $("#minimize").hide();
    });
    $("#maximize").click(function () {
        maximize = true
        elementDettach($("#radio_tv"));
        $("#minimize").show();
    });
    //////////////////////////////////////////////////////////////////////////////////////////////
    // si on apuie sur la menu du navbar autre que l'accueil
    $("#liste #menu").click(function () {

        //pour en permanance la radio
        $(this).css('color','red');
        elementDettach($("#radio_tv"));
        $("#teleContainer").empty();
        $("#radioContainer").attr("class", "col-sm-12");
        $("#pubEmission").hide();
        $("#title_radio").hide();
        $("#minimize").show();
        $("#radio").css({
            "background": "white",
            "width": "auto",
            "height": "auto"
        });

        //rend element draggable
        dragElement(document.getElementById("radio_tv"));
        $("#radio_tvheader").show();
        dragged = true;

        //pour load la menu voulue
        var page = $(this).attr('class');
        loadPage(page, $("#varPage"));

    });

    //si on apuie sur accueil pour affiche les live streaming (tv et radio)
    $("#accueil").click(function () {

        $("#radio_tv").css({
            "display": "block",
            "top": "auto",
            "left": "auto",
            "position": "relative",
            "z-index": "0",
            "opacity": "1",
            "-moz-box-shadow": "0 0 10px rgba(5, 5, 5, 0.400)",
            "-webkit-box-shadow": "0 0 10px rgba(5, 5, 5, 0.400)",
            "box-shadow": "0 0 10px rgba(5, 5, 5, 0.400)",
            "background-color": "#ffed41"
        });
        $("#title_radio").show();
        $("#radioContainer").attr("class", "col-sm-6");
        $("#teleContainer").empty();
        //ajouter la tv de youtube
        $("#teleContainer").append("<div id='tele'><div id='tv-header'><span id='titleMedia'>TV HFF</span><h6>Streaming Direct</h6><div id='youtube-plugin'><div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/live_stream?channel=UCaw_3YWHDIMMJTDaNo0ZVOA'   allowfullscreen></iframe></div></div></div></div>");
        $("#pubEmission").show();
        $("#varPage").empty();
        $("#varPage").hide();
        $("#radio_tvheader").hide();
        dragged = false;
    });

    // style opacite de la fenetre radio
    /////////////////////////////////////////////////////////////   
    $("#radio_tv").mouseover(function () {
        $(this).css({
            "opacity": "1"
        });
    });

    $("#radio_tv").mouseout(function () {
        if (dragged && maximize) {
            $(this).css({
                "opacity": "0.5"
            });
        }
    });
    ///////////////////////////////////////////////////////////////////


    $(document).scroll(function () {
        $("#myNav").css({
            "box-shadow": "1px 1px 12px rgb(5, 5, 5)"
        });
    });
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
});


