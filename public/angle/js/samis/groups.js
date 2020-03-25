
function updateGroupTable(selector){
    document.getElementById("groupTableBody").innerHTML = '';
   var groups = JSON.parse($(selector).val());
   
   console.log(groups);

   groups.forEach(function (group){
    console.log(group.name);
    var row = document.createElement('tr');
    row.text = group.name;
    document.getElementById("groupTableBody").innerHTML=' hello';//appendChild(row);
   });

//    groups.forEach(group=>{
//        console.log(group.name);
//     var row = document.createElement('tr');
//     row.text = group.name;
//     document.getElementById("groupTableBody").append(row);

//    });

   
    //document.getElementById("groupTableBody");

}