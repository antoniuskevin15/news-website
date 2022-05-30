function sliceUsername() {
  const username = document.getElementById("username");

  if (!username) return;

  const usernameSplit = username.textContent.split(" ");

  if (usernameSplit.join(" ").length > 15 || username.textContent.length > 15) {
    username.textContent = usernameSplit[0];
  }
}

function getCategoryElement(id) {
  return document.getElementById(id);
}

function addActiveClass() {
  const params = document.location.search.split("&")[1];
  const categoryElement = document.querySelector(".item-link");

  if (categoryElement.classList.contains("active-item")) {
    categoryElement.classList.remove("active-item");
  }

  if (!params) {
    getCategoryElement("chome").classList.add("active-item");
    return;
  }

  const categoryIndex = params.split("=");

  switch (isNaN(+categoryIndex[1]) ? categoryIndex[1][0] : categoryIndex[1]) {
    case "1":
    case "N":
      getCategoryElement("c1").classList.add("active-item");
      break;
    case "2":
    case "I":
      getCategoryElement("c2").classList.add("active-item");
      break;
    case "3":
    case "P":
      getCategoryElement("c3").classList.add("active-item");
      break;
    case "4":
    case "E":
      getCategoryElement("c4").classList.add("active-item");
      break;
    case "5":
    case "D":
      getCategoryElement("c5").classList.add("active-item");
      break;
    case "6":
    case "T":
      getCategoryElement("c6").classList.add("active-item");
      break;
    case "7":
    case "S":
      getCategoryElement("c7").classList.add("active-item");
      break;
    case "8":
    case "H":
      getCategoryElement("c8").classList.add("active-item");
      break;
    case "9":
    case "L":
      getCategoryElement("c9").classList.add("active-item");
      break;
    case "10":
    case "F":
      getCategoryElement("c10").classList.add("active-item");
      break;
  }
}

function lineBreakEveryTwoSentence() {
  const newsURI = document.location.search;

  if (newsURI.includes("berita")) {
    const newsContent = document.getElementById("news-content");
    const searchEmptyString = newsContent.textContent.split("\n");
    const contentAfterAddingLineBreak = searchEmptyString.map((content) => (content.length === 0 ? (content += "<br><br>") : content));

    newsContent.innerHTML = contentAfterAddingLineBreak.join("");
  }
}

sliceUsername();
addActiveClass();
lineBreakEveryTwoSentence();
