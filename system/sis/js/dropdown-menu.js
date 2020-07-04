/************************************************
SIS Drop Down Menu Code
*************************************************/

$(document).ready(function(){
    
    var sisDivs = [$("div#sisDashboard"), $("div#sisEvent"), $("div#enrollment-info"), $("div#academic-record"), $("div#account-statement"), $("div#e-pay"), $("div#gpa-calculator"), $("div#university-bylaws"), $("div#sisCourseMenu"), $("div#assignment"), $("div#exam"), $("div#planMenu")];
    
    var sisLis = [$("li#sisDashboard"), $("li#sisEvent"), $("li#enrollment-info"), $("li#academic-record"), $("li#account-statement"), $("li#e-pay"), $("li#gpa-calculator"), $("li#university-bylaws"), $("li#sisCourseMenu"), $("li#assignment"), $("li#exam"), $("li#planMenu")];
    
    $("li#sisDashboard").click(function(){
        $("li#sisDashboard").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#sisDashboard").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 0)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 0)
                continue;
            sisLis[i].css('box-shadow', 'none');
        }
    });
    
    $("li#sisEvent").click(function(){
        $("li#sisEvent").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#sisEvent").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 1)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 1)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#enrollment-info").click(function(){
        $("li#enrollment-info").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#enrollment-info").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 2)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 2)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#academic-record").click(function(){
        $("li#academic-record").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#academic-record").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 3)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 3)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#account-statement").click(function(){
        $("li#account-statement").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#account-statement").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 4)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 4)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#e-pay").click(function(){
        $("li#e-pay").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#e-pay").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 5)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 5)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#gpa-calculator").click(function(){
        $("li#gpa-calculator").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#gpa-calculator").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 6)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 6)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#university-bylaws").click(function(){
        $("li#university-bylaws").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#university-bylaws").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 7)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 7)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#sisCourseMenu").click(function(){
        $("li#sisCourseMenu").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#sisCourseMenu").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 8)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 8)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#assignment").click(function(){
        $("li#assignment").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#assignment").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 9)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 9)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#exam").click(function(){
        $("li#exam").css('box-shadow', '0 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#exam").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 10)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 10)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    });
    
    $("li#planMenu").click(function(){
        $("li#planMenu").css('box-shadow', '2px 2px 14px rgba(225, 225, 225, 0.9)');
        $("div#planMenu").toggle();
        for (var i = 0; i < sisDivs.length; i++){
            if (i == 11)
                continue;
            sisDivs[i].hide();
        }
        for (var i = 0; i < sisLis.length; i++){
            if (i == 11)
                continue;
            sisLis[i].css('box-shadow', 'none');
        } 
    
    });
});