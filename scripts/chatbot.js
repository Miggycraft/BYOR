// enables enter
document.getElementById("userInput").addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
        generateResponse();
    }
});

function showTypingIndicator() {
    const chatbox = document.getElementById("chatbot");
    const typingDiv = document.createElement("div");
    typingDiv.id = "typing-indicator";
    typingDiv.textContent = "Bot is typing...";
    chatbox.appendChild(typingDiv);
    chatbox.scrollTop = chatbox.scrollHeight;
}

function hideTypingIndicator() {
    const typingDiv = document.getElementById("typing-indicator");
    if (typingDiv) typingDiv.remove();
}

function generateResponse() {
    const userInput = document.getElementById("userInput").value.trim();
    if (!userInput) return;

    addMessage(userInput, 'user');
    document.getElementById("userInput").value = '';

    showTypingIndicator(); // Show typing while waiting

    fetch("response.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ text: userInput }),
    })
        .then(res => res.text())
        .then(res => {
            hideTypingIndicator();
            console.log("Full Response:", res); // Show full response in console
            if (res.trim()) {
                const formattedResponse = formatResponse(res);
                addMessage(formattedResponse, 'bot');
            } else {
                addMessage("No response received from server.", 'bot');
            }
        })
        .catch(error => {
            hideTypingIndicator();
            console.error("Error fetching response:", error);
            addMessage("Sorry, something went wrong.", 'bot');
        });
}

function addMessage(text, sender) {
    console.log(`Adding ${sender} message:`, text); // Debugging line
    const chatbox = document.getElementById("chatbot");

    // Create a new message element
    const messageDiv = document.createElement("div");
    messageDiv.classList.add("chat-message", sender);

    // If the sender is the bot, parse the text as HTML
    if (sender === 'bot') {
        messageDiv.innerHTML = text; // Allow HTML content for bot messages
    } else {
        messageDiv.textContent = text; // Plain text for user messages
    }

    // Append the message to the chatbox
    chatbox.appendChild(messageDiv);

    // Scroll to the bottom of the chatbox
    chatbox.scrollTop = chatbox.scrollHeight;
}

// function formatResponseAsList(response) { annoying bullshit.
//     // Split the response into individual list items
//     const items = response.split(/\*\*(.*?)\*\*\s*-\s*/).filter(item => item.trim() !== '');

//     // Create an HTML list
//     let listHTML = '';
//     for (let i = 0; i < items.length; i += 2) {
//         const title = items[i];
//         const description = items[i + 1];
//         if (title && description) {
//             listHTML += `<strong>${title.trim()}</strong>: ${description.trim()}<br>`;
//         }
//     }

//     return listHTML;
// }

function formatResponse(response) {
    // Replace newlines with <br> for line breaks
    response = response.replace(/\n/g, '<br>');

    // Replace "**text**" with bold tags for proper bold formatting
    response = response.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

    return response;
}