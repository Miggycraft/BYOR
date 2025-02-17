<?php include 'includes/header.php'; ?>
<main>
    <div class="chatbot-container">
        <h1>Chat Bot</h1>
        <div id="chatbot">
            <!-- Chatbot responses will appear here -->
        </div>
        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Ask something...">
            <button onclick="generateResponse()">Send</button>
        </div>
    </div>
</main>

<script src="scripts/chatbot.js"></script>
<script src="scripts/scripts.js"></script>
<?php include 'includes/footer.php'; ?>