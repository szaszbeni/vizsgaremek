document.addEventListener("DOMContentLoaded", function () {
    let chatBox = document.getElementById("chat-box");
    let inputBox = document.getElementById("input-box");
    let sendBtn = document.getElementById("send-btn");
    let activeFriend = null;

    document.querySelectorAll("#baratok li a").forEach(friend => {
        friend.addEventListener("click", function (event) {
            event.preventDefault();
            activeFriend = this.getAttribute("href").split("=")[1];
            loadMessages();
        });
    });

    function loadMessages() {
        if (!activeFriend) return;
        let formData = new FormData();
        formData.append("friend", activeFriend);

        fetch("load_messages.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            chatBox.innerHTML = data;
            chatBox.scrollTop = chatBox.scrollHeight;
        });
    }

    sendBtn.addEventListener("click", function (event) {
        event.preventDefault();
        if (!activeFriend || inputBox.value.trim() === "") return;

        let formData = new FormData();
        formData.append("friend", activeFriend);
        formData.append("uzi", inputBox.value);

        fetch("send_message.php", {
            method: "POST",
            body: formData
        })
        .then(() => {
            inputBox.value = "";
            loadMessages();
        });
    });

    setInterval(loadMessages, 3000);
});
