window.addEventListener('load', async () => {
  console.log("Seite geladen");
<<<<<<< HEAD
  getNewUniqueLink();
  document.getElementById('create').addEventListener('click' , async (event) => createEntry());
=======
  //getNewUniqueLink();
  document.getElementById('btnCreateTan').addEventListener('click' , async (event) => getNewUniqueLink());
  document.getElementById('btnAbsenden').addEventListener('click' , async (event) => createEntry());
>>>>>>> parent of 268a8ea... switched tan from unique id to index
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
<<<<<<< HEAD
  const formData = new formData(document.getElementById('create-form'));
=======
  console.log("Absenden gedrueckt!!!!");
  const formData = new formData(document.getElementById('entry-form'));
>>>>>>> parent of 268a8ea... switched tan from unique id to index

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
