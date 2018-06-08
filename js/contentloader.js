window.addEventListener('load', async () => {
  console.log("Seite geladen");
  getNewUniqueLink();
  document.getElementById('create').addEventListener('click' , async (event) => createEntry());
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
async function createEntry()  {
  event.preventDefault()
  const formData = new formData(document.getElementById('create-form'));

  try {
    const response = await fetch('php/login.php', {
      method: 'post',
      body: formData
    });
    const jsonData = await response.json();

  } catch (e) {
    console.log("Fehler");
  }
}
