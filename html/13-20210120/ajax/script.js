function loadDoc() {
    var xhttp = new XMLHttpRequest();
    var spinner = document.getElementById('loading');
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            spinner.style.display = 'none';
            document.getElementById('demo').innerHTML = this.responseText;
            var str = JSON.parse(this.responseText);
            console.log(str);
        } else if (this.readyState == 1) {
            spinner.style.display = "block";
        } else if (this.readyState == 2) {
            spinner.style.display = 'block';
        } else {
            spinner.style.display = 'block';
        }
    };
    xhttp.open("GET", "http://13.251.77.163/du-an/aptech-php-laravel-crud-user/public/api/users", true);
    xhttp.send();
}