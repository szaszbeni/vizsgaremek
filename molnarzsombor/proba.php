<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Weboldal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    #chat-box {
      width: 400px;
      height: 300px;
      border: 1px solid #ccc;
      padding: 10px;
      overflow-y: scroll;
      margin-bottom: 10px;
    }
    #input-box {
      width: 100%;
      padding: 10px;
    }
    #send-btn {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    #send-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2>Chat Weboldal</h2>
  <div id="chat-box"></div>
  <textarea id="input-box" rows="3"></textarea><br>
  <button id="send-btn">Üzenet Küldése</button>

  <script>
    const chatBox = document.getElementById("chat-box");
    const inputBox = document.getElementById("input-box");
    const sendBtn = document.getElementById("send-btn");

    // Új üzenet hozzáadása a chathez
    function addMessage(message) {
      const messageElement = document.createElement("p");
      messageElement.textContent = message;
      chatBox.appendChild(messageElement);
      chatBox.scrollTop = chatBox.scrollHeight; // Görgetés az utolsó üzenethez
    }

    // Üzenet küldése
    sendBtn.onclick = function() {
      const message = inputBox.value.trim();
      if (message) {
        addMessage("Te: " + message);
        inputBox.value = ""; // Üzenet törlése
        // Itt lehetne további logikát hozzáadni, például egy háttérszolgáltatással való kommunikációt
      }
    };

    // Enter billentyű nyomása üzenet küldésére
    inputBox.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        sendBtn.click();
      }
    });
  </script>
</body>
</html>