var tablePhone = [
    ['Iphone', '50$', 'my', 'nhap nhau'],
    ['Galaxy', '40$', 'han quoc', 'trong nuoc'],
    ['Vsmart', '10$', 'viet nam', 'trong nuoc'],
    ['Blackberry', '30$', 'duc', 'trong nuoc']    
];
// var text ='';
//     function print(){
//     text = '<table>';
//     for(var i = 0; i<tablePhone.length; i++){
//         text +=  '<tr>' ;
//         text += '<td>' + (i+1) + '</td>'; 
//         for(var j = 0; j<tablePhone[i].length; j++){
//             text += '<td>' + tablePhone[i][j] + '</td>';
//         }
//         text += '</tr>';
//     }
//     text += '</table>';

//     document.getElementById('table').innerHTML = text;
// }


// second way:
// var tbl = document.createElement("table");
// var row = document.createElement("tr");
// var td = document.createElement("td");
// var title = ['Phone', 'Price', 'Product', 'Im/Ex'];


// function print(){
//     var headerRow = document.createElement('tr');
//     title.forEach(headertext => {
//         var header = document.createElement('th');
//         var textNode = document.createTextNode(headertext);
//         header.appendChild(textNode);
//         headerRow.appendChild(header)
//     })
//     tbl.appendChild(headerRow);
//     tbl.style.border = "2px solid black";
//  tablePhone.forEach(emp => {
//      let row = document.createElement('tr');
//      Object.values(emp).forEach(text => {
//          var cell = document.createElement('td');
//          var textnode = document.createTextNode(text);
//          cell.appendChild(textnode);
//          row.appendChild(cell);
//      })
//      tbl.appendChild(row);
//  })
   
// }
    // document.body.appendChild(tbl);

// third way:
function print(){
    var tbl = document.createElement('table');
     
    

    for(var i=0; i<tablePhone.length; i++){
        var row = document.createElement('tr');
        row = tbl.insertRow();
         for(var j=0; j<tablePhone[i].length; j++){
            var td = document.createElement('td');
            td = row.insertCell();
            td.textContent = tablePhone[i][j];
         }
         row.appendChild(td);
    }
    tbl.appendChild(row);
    document.body.appendChild(tbl);
}
 
    
