window.addEventListener('load', async () => {
  console.log("Seite geladen");

  //getNewUniqueLink();
  setActiveNav();
  document.getElementById('btnCreateTan').addEventListener('click' , async (event) => getNewUniqueLink());

})

async function getNewUniqueLink() {
  const phpSessionForm = new FormData();
  phpSessionForm.append("phpSession", PHPSESSIONUSER);
  try {
    var firstFetch = await fetch('php/generateLink.php', {
      method: 'post',
      body: phpSessionForm
    });
		var jsonFirstFetch = await firstFetch.json();
		var genTan = document.getElementById('genTan');
		genTan.innerHTML = "Das ist deine neue friendsTAN: " + `${jsonFirstFetch.html}`;

  } catch (e) {
    console.log("Server nicht erreichbar.");
  }

}

//<!--Register-->
document.getElementById('create-form').addEventListener("submit" , async (event) => {
  event.preventDefault();
  const formData = new FormData(document.getElementById('create-form'));
  try {
    const response = await fetch('php/signup.php', {
      method: 'post',
      body: formData
    });
    const jsonData = await response.json();
    console.log(jsonData);
    alert(jsonData);

  } catch (e) {
    console.log("Abschicken der Daten fehlerhaft!");
  }
})

function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}

function setActiveNav(){
  if(window.location.href.indexOf("?") >= 0){
    if(window.location.href.indexOf("page=home") >= 0){
      $("#navItemHome").addClass('active');
    } else if (window.location.href.indexOf("page=newEntry") >= 0){
      $("#navItemEntry").addClass('active');
    } else if (window.location.href.indexOf("page=myFriendsBook") >= 0){
      $("#navItemDashboard").addClass('active');
    } else if (window.location.href.indexOf("page=newEntry") >= 0){
      $("#navItemEntry").addClass('active');
    }
  } else {
    $("#navItemHome").addClass('active');
  }
}
