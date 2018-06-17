window.addEventListener('load', async () => {
  console.log("Seite geladen");
  //getNewUniqueLink();
  document.getElementById('btnCreateTan').addEventListener('click' , async (event) => getNewUniqueLink());
})

async function getNewUniqueLink() {
  try {
    var firstFetch = await fetch('php/generateLink.php');
		var jsonFirstFetch = await firstFetch.json();
		var content = document.getElementById('content');
		content.innerHTML = `${jsonFirstFetch.html}`;

  } catch (e) {
    console.log("Server nicht erreichbar.");
  }

}

//<!--Register-->
document.getElementById('btnCreate').addEventListener("click" , async (event) => {
  const formData = new FormData(document.getElementById('create-form'));
  try {
    const response = await fetch('php/signin.php', {
      method: 'post',
      body: formData
    });
    const jsonData = await response.json();
    console.log(jsonData);

  } catch (e) {
    console.log("Abschicken der Daten fehlerhaft!");
  }
})

//<!--Login-->
document.getElementById('btnLogin').addEventListener("click" , async (event) => {
  event.preventDefault();
  // if (document.getElementById('btnLogin') === "Login") {
    const formData = new FormData(document.getElementById('login-form'));

    // try {
      const response = await fetch('php/signup.php', {
        method: 'post',
        body: formData
      });
      const jsonData = await response.json();
      if (typeof jsonData.error !== 'undefined') {
        console.log(jsonData);
        document.getElementById('login-status').innerHTML = jsonData.error.fontcolor("red");
      } else {
        console.log(jsonData);
        document.getElementById('login-status').innerHTML = "Eingeloggt";
        location.replace('index2.htm');
        // if (jsonData == 'true') {
        //   document.getElementById('toggle-login').innerHTML = "Logout";
        //   document.getElementById('btnLogin').innerHTML = "Logout";
        //   document.getElementById('exampleModalLabel').innerHTML = "Logout";
        //   document.getElementById('login-status').innerHTML = "Erfolgreich eingeloggt";
        // }
        // else {
        //   document.getElementById('toggle-login').innerHTML = "Login";
        //   document.getElementById('btnLogin').innerHTML = "Login";
        //   document.getElementById('exampleModalLabel').innerHTML = "Login";
        //   document.getElementById('login-status').innerHTML = "Erfolgreich ausgeloggt";
        // }
        // location.reload();
      }
    // }
    // catch (e) {
    //   console.log("Login Fehler");
    // }
  // }

})
