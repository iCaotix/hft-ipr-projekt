window.addEventListener('load', async () => {
  console.log("Seite geladen");

  //getNewUniqueLink();
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
    const response = await fetch('php/signup.php', {
      method: 'post',
      body: formData
    });
    const jsonData = await response.json();
    console.log(jsonData);

  } catch (e) {
    console.log("Abschicken der Daten fehlerhaft!");
  }
})

function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}
