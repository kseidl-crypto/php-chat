class Message{
    constructor(user, date, text) {
        this.user = user;
        this.date = date;
        this.text = text;
    }
}

function setup(){
    console.log("setting up...");
    setInterval(chat, 10000);
    chat();
}

function chat(){
    console.log("updating...");
    let con = document.getElementById("messages");
    con.innerHTML = "";
    let mes;
    $.ajax({
        url:'./Dateien/Nachrichten.txt',
        success: function (data){
            console.log("ajax success");
            mes = mesUnpack(data);
            for(let i = 0; i < mes.length; i++){
                console.log("adding messages...");
                let cont = document.createElement("div");
                cont.className = "row mes";
                cont.innerHTML = "\n" +
                    "      <div class=\"col-12\">\n" +
                    "          <h6 class=\"mheader\">" + mes[i].user + " - " + mes[i].date + "</h6>\n" +
                    "      </div>\n" +
                    "      <div class=\"col-12 mtext\">\n" +
                    "        <p class=\"text\">" + mes[i].text + "</p>" +
                    "      </div>\n";
                con.appendChild(cont);
            }
        }
    });
}

function mesUnpack(mes){
    let messa = mes.split("\n");
    let messages = [];
    for(let i = 0; i < messa.length; i++){
        let messasplit = messa[i].split("||");
        let m = new Message(messasplit[0],messasplit[1],messasplit[2]);
        messages.push(m);
    }
    return messages;
}