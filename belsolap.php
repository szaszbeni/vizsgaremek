<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Chat Weboldal</title>

  <link rel="stylesheet" href="vizsga.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="tooplate-kool-form-pack.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <style>
    /* Globális stílusok */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      color: #333;
    }

    /* Chat panel */
    #chat-box {
      width: 100%;
      height: 400px;
      padding: 10px;
      background-color: #fff;
      border-radius: 8px;
      border: 1px solid #ddd;
      overflow-y: auto;
      margin-bottom: 15px;
    }

    /* Üzenet beviteli mező */
    #input-box {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      resize: none;
    }

    /* Küldés gomb */
    #send-btn {
      background-color: #4e73df;
      color: white;
      border: none;
      padding: 15px;
      font-size: 20px;
      cursor: pointer;
      border-radius: 50%;
      margin-top: 10px;
      display: block;
      width: 60px;
      height: 60px;
      margin-left: auto;
      margin-right: auto;
      transition: background-color 0.3s;
    }

    #send-btn:hover {
      background-color: #2e59d9;
    }

    /* Oldalsáv */
    #baratok {
      padding: 0;
      list-style: none;
      background-color:  #f1f1f1;
      border-radius: 10px;
    }

    #baratok li {
      padding: 12px;
      cursor: pointer;
      border-bottom: 1px solid #ddd;
      transition: background-color 0.3s;
    }

    #baratok li:hover {
      background-color: gray;
    }

    .message {
      padding: 8px;
      margin: 10px 0;
      border-radius: 5px;
    }

    .message.user {
      background-color: #e1f5fe;
      text-align: right;
    }

    .message.other {
      background-color: #f1f1f1;
      text-align: left;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Felhasználók listája -->
      <div class="col-md-3">
        <ul id="baratok">
          <li>Barát 1</li>
          <li>Barát 2</li>
          <li>Barát 3</li>
          <li>Barát 4</li>
        </ul>
      </div>

      <!-- Chatbox -->
      <div class="col-md-6">
        <div id="chat-box"></div>
        <textarea id="input-box" rows="3" placeholder="Írj valamit..."></textarea>
        <button id="send-btn">↑</button>
      </div>

      <!-- Információs panel -->
      <div class="col-md-3">
        <h4>Információ</h4>
        <p>Itt chatelhetsz más felhasználókkal.</p>
      </div>
    </div>
  </div>

  <script>
    const chatBox = document.getElementById("chat-box");
    const inputBox = document.getElementById("input-box");
    const sendBtn = document.getElementById("send-btn");

    function addMessage(message, sender) {
      const messageElement = document.createElement("div");
      messageElement.classList.add("message");
      messageElement.classList.add(sender); // user vagy other
      messageElement.textContent = message;
      chatBox.appendChild(messageElement);
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    sendBtn.onclick = function() {
      const message = inputBox.value.trim();
      if (message) {
        addMessage("Te: " + message, "user");
        inputBox.value = "";
      }
    };

    inputBox.addEventListener("keypress", function(event) {
      if (event.key === "Enter" && !event.shiftKey) {
        event.preventDefault();
        sendBtn.click();
      }
    });
  </script>
</body>
</html>