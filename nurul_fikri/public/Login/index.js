function login() {
    let user = document.getElementById("username");
    let pass = document.getElementById("password");

    // console.log("username: " + user.value);
    // console.log("password: " + pass.value);
    if(user.value == "admin" && pass.value == "affati03"){
        alert("Selamat Datang");
        window.location="indexklj.html";
    }
    else{
        alert("Username atau Password salah");
    }
}