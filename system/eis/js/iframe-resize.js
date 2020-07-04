function AdjustIframeHeightOnLoad() { 
    document.getElementById("management-frame").style.height = document.getElementById("management-frame").contentWindow.document.body.scrollHeight + "px"; 
}
function AdjustIframeHeight(i) { 
    document.getElementById("management-frame").style.height = parseInt(i) + "px"; 
}