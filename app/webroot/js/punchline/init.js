
$(window).bind({
    "preload_complete" : init,
    "open_complete" : openComplete,
    "close_started" : closeStarted,
    "close_complete" : closeComplete,
    "anim_teeshirt_over" : initLinks
});

$(window).ready(function(){
    $('body').preload();
    $("#menu").menu();
});

var openPage = "#shirts";
var isOpen = false;
function init(){
    $(openPage).toggleContent('open');
}

function openComplete(){
    switch ( openPage ) {
        case "#shirts":
			console.log("here");
            $("#shirts").carousel();
            //console.log($("#shirts ul").height());
            //$("#shirts ul").jcarousel({
            //
            //});
            $("#shirts a.shirt").initModal();
        break;
        case "#coming-soon":
            
        break;
    }
    isOpen = true;
}

function closeStarted(){
    isOpen = false;
}
function closeComplete(){
    $.ajax({
        url : openPage,
        success : function(html){
            $('#content').html(html);
            openPage = openPage.replace("/", "#");
            // **********************************************************
            // **** TEMP
            if ( openPage != "#shirts" ) openPage = "#coming-soon";
            // **********************************************************
            // **********************************************************
            $(openPage).toggleContent('open');
        }
    });
}

function initLinks(){
    
}
