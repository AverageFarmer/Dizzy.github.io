//Video
var VideoBody = document.getElementById("video-body")

const Videos = [
    {
        Name: "Flight Mechanics",
        Video: "https://streamable.com/e/javwpi"
    },
    {
        Name: "Combat Mechanics",
        Video: "https://www.youtube.com/embed/AXXzbILVfRo"
    },
    {
        Name: "Charging Mechanics/VFX",
        Video: "https://www.youtube.com/embed/Pdh3oY2LK5k",
    },
    {
        Name: "Lightning God Showcase",
        Video: "https://www.youtube.com/embed/SpsUnWc1mZg"
    }
]

for (const vidnum in Videos) {
    const videoInfo = Videos[vidnum];
    const videoName = videoInfo.Name;
    const videoLink = videoInfo.Video;

    var newDiv = document.createElement("div")
    newDiv.className ="video-container"
    newDiv.innerHTML += `<p class="video-name">${videoName}</p>`
    newDiv.innerHTML += `<iframe width="560" height="315" src=${videoLink} frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`

    VideoBody.appendChild(newDiv)
}
