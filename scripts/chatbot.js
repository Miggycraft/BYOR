function generateResponse() {
    var text = document.getElementById("userInput").value;
    var response = document.getElementById("chatbot");
    
    fetch("response.php", {
        method: "POST",
        body: JSON.stringify({ text: text }),
    })
        .then((res) => res.text())
        .then((res) => { response.innerHTML = res; });
}