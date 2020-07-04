/************************************************
EIS Drop Down Menu Code
*************************************************/

$(document).ready(function(){
    
    var divs = [$("div#collegeMenu"), $("div#sectionMenu"), $("div#executiveMenu"), $("div#professorMenu"), $("div#studentMenu"), $("div#courseMenu"), $("div#libraryMenu"), $("div#programMenu"), $("div#staffMenu"), $("div#salaryMenu"), $("div#emailMenu"), $("div#feeMenu")];
    
    var lis = [$("li#collegeMenu"), $("li#sectionMenu"), $("li#executiveMenu"), $("li#professorMenu"), $("li#studentMenu"), $("li#courseMenu"), $("li#libraryMenu"), $("li#programMenu"), $("li#staffMenu"), $("li#salaryMenu"), $("li#emailMenu"), $("li#feeMenu"), $("li#event"), $("li#dashboard")];
    
    $("li#collegeMenu").click(function(){
        $("li#collegeMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#collegeMenu").toggle();
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
    
    $("li#sectionMenu").click(function(){
        $("li#sectionMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#sectionMenu").toggle();
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
    
    $("li#executiveMenu").click(function(){
        $("li#executiveMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#executiveMenu").toggle();
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
    
    $("li#professorMenu").click(function(){
        $("li#professorMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#professorMenu").toggle();
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
    
    $("li#studentMenu").click(function(){
        $("li#studentMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#studentMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 4)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 4)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#courseMenu").click(function(){
        $("li#courseMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#courseMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 5)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 5)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#libraryMenu").click(function(){
        $("li#libraryMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#libraryMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 6)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 6)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#programMenu").click(function(){
        $("li#programMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#programMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 7)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 7)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#staffMenu").click(function(){
        $("li#staffMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#staffMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 8)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 8)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#salaryMenu").click(function(){
        $("li#salaryMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#salaryMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 9)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 9)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#emailMenu").click(function(){
        $("li#emailMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#emailMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 10)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 10)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
  });
    
    $("li#feeMenu").click(function(){
        $("li#feeMenu").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        $("div#feeMenu").toggle();
        for (var i = 0; i < divs.length; i++){
            if (i == 11)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 11)
                continue;
            lis[i].css('box-shadow', 'none');
        }
  });

    $("li#dashboard").click(function(){
        $("li#dashboard").css('box-shadow', '0 2px 14px rgba(50, 50, 50, 0.3)');
        for (var i = 0; i < divs.length; i++){
            if (i == 12)
                continue;
            divs[i].hide();
        }
        for (var i = 0; i < lis.length; i++){
            if (i == 12)
                continue;
            lis[i].css('box-shadow', 'none');
        } 
    });
    
});