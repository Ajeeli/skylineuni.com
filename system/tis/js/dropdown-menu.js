/************************************************
TIS Drop Down Menu Code
*************************************************/

$(document).ready(function(){
    
    var divs = [$("div#sectionMenu"), $("div#courseMenu"), $("div#assignmentMenu"), $("div#examMenu")];
    
    var lis = [$("li#sectionMenu"), $("li#courseMenu"), $("li#assignmentMenu"), $("li#examMenu")];
    
    $("li#sectionMenu").click(function(){
        $("li#sectionMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#sectionMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 0)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 0)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#courseMenu").click(function(){
        $("li#courseMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#courseMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 1)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 1)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#assignmentMenu").click(function(){
        $("li#assignmentMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#assignmentMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 2)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 2)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#examMenu").click(function(){
        $("li#examMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#examMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 3)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 3)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
    });
})