<?php
include 'includes/header.php';
include 'includes/db.php';
?>

<body>
    <h1>Chat Bot</h1>

    <input type="text" id="userInput" placeholder="Ask something...">

    <br><br>

    <button onclick="generateResponse();">Generate Response</button>

    <br><br>

    <div id="chatbot"></div>

    <script src="scripts/chatbot.js"></script>
</body>

<?php include 'includes/footer.php'; ?>