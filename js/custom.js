// to get current year


function loadFile(event) {

    document.getElementById('glassAvatar').empty();
    var output = document.getElementById('glassAvatar');
    output.src = URL.createObjectURL(event.target.files[0]);;

    /* console.log(file); */
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
 
    
}


function loadFile2(event) {
    //alert(event.target.id);
   id =  event.target.id.substr(3, 3);
 
  
  // document.getElementById('inputoculos').empty();
    output = URL.createObjectURL(event.target.files[0]);
    list_items[id] = '<div class="box"><li><div class="img-box"> <div id="selectoculos'+id+'"><a href="javascript:void 0"><img src='+output+' width="150" height="75" border="0" /></a> </div></div><div class=price><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl3" id="upl'+id+'"/><label id="labelid" style="cursor: pointer;" for="upl'+id+'">Foto óculos</label></div></li></div>,';
    /* console.log(list_items) */
    output.onload = function() {
    URL.revokeObjectURL(output) // free memory
        }
    
        document.getElementById("selectoculos"+id).innerHTML = "<a href='javascript:void 0'><img src='"+output+"' width='150' height='75' border='0' /></a>";
        UCAN.util.listenGlass();

    
}
