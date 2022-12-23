//Nav
var Body = document.getElementsByTagName("body")[0]
const pages = [
    {
        path: "index.html",
        text: "Home"
    },
    {
        path: "./Pages/contact.php",
        text: "Contacts"
    }
]

var newDiv = document.createElement("div")
var newNav = document.createElement("nav")

Body.appendChild(newDiv)
newDiv.appendChild(newNav)

newNav.innerHTML += `<h1 id="navheader">My Portfolio</h1>`

var header = document.getElementById("navheader")
var ul = document.createElement("ul")

newNav.appendChild(ul)

for (i in pages) {
    const pageInfo = pages[i]

    var list = document.createElement("li")
    list.innerHTML += `<a href=${pageInfo.path} class="underline">${pageInfo.text}</a>`

    ul.appendChild(list)
}
