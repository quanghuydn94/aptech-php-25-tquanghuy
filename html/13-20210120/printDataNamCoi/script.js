function loadDoc(){
    
    var xhttp = new XMLHttpRequest();
    // var usersList = [];
    xhttp.onreadystatechange = function (){

        if (this.readyState == 4 && this.status == 200){
            var strUsers = JSON.parse(this.responseText);
            var tbody = document.getElementById('tableBody');
            console.log(strUsers);
            // var user = {
				
			// 	'id': strUsers.users.id,
			// 	'name': strUsers.users.name,
			// 	'email': strUsers.users.email
            // }
            // usersList.push(user)

            for(i=0; i<strUsers.users.length; i++){
             //   for(var key in strUsers.users){
                var row = document.createElement("tr");

                var anchorBtn1 = document.createElement('a');
                anchorBtn1.href = './showinfo.html';
                var btn1 = document.createElement('button');
                btn1.innerHTML = 'Show';
                btn1.className = "btn btn-primary";
                anchorBtn1.appendChild(btn1);
                btn1.addEventListener('click', showUser);
                

                var anchorBtn2 = document.createElement('a');
                anchorBtn2.href = './edit.html';
                var btn2 = document.createElement('button');
                btn2.innerHTML = 'Edit';
                btn2.className = 'btn btn-warning';
                anchorBtn2.appendChild(btn2);
                btn2.addEventListener('click', editUser);
                
                
                var btn3 = document.createElement('button');
                btn3.innerHTML = 'Delete';
                btn3.className = 'btn btn-danger';
                btn3.addEventListener('click', deleteUser);
            
                var td1 = document.createElement("td");
                var td2 = document.createElement("td");
                var td3 = document.createElement("td");
                var td4 = document.createElement("td");
                td4.className = 'd-flex justify-content-between';

                td1.innerHTML = strUsers.users[i].id;
                td2.innerHTML = strUsers.users[i].name;
                td3.innerHTML = strUsers.users[i].email;

                td4.appendChild(anchorBtn1);
                td4.appendChild(anchorBtn2);
                td4.appendChild(btn3);
                
                row.appendChild(td1);
                row.appendChild(td2);
                row.appendChild(td3);
                row.appendChild(td4);
            tbody.appendChild(row);
            }
        //     tbody.innerHTML += `<tr>
        //     <td>${strUsers.users[i].id}</td>
        //     <td>${strUsers.users[i].name}</td>
        //     <td>${strUsers.users[i].email}</td>
        //     <td><button class="btn btn-warning" onclick="editUser(${i})">Edit</button>
        //     <button class="btn btn-danger" onclick="deleteUser(${i})">Delete</button></td>
        // </tr>`}
        // if(strUsers.users.id != '') {
        //     usersList[strUsers.users.id] = user
            
        //     return;
        }

        
         
        
    };
    
    xhttp.open("GET", "http://13.251.77.163/du-an/aptech-php-laravel-crud-user/public/api/users", true);
    xhttp.send();

    function showUser(){
     
    }
    
    function editUser(){
    
    }
    
    function deleteUser(i){
        usersList.splice(i, 1)
    }
}
