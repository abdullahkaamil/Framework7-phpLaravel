var editStatus = false;
var editIndex;
var items = [];

function EditEvent() {
    var btnEdits = document.getElementsByClassName("edit");
    Array.from(btnEdits).forEach((x) => {
        x.addEventListener("click", (e) => {
        //    if (editStatus) {
         //       return;
         //   }
            editStatus = true;
            editIndex = e.target.id;//keep the index for the verification in the Save opreation

            var id = e.target.parentNode.parentNode.firstChild;//id
            var idValue = id.innerHTML;
            var editId = document.createElement("input");
            id.innerHTML = "";
            editId.value = idValue;
            editId.setAttribute("className", "input");
            id.appendChild(editId);

            var name = e.target.parentNode.parentNode.firstChild.nextSibling.nextSibling;//name
            var nameValue = name.innerHTML;
            var editName = document.createElement("input");
            name.innerHTML = "";
            editName.value = nameValue;
        //editName.setAttribute("className", "input");
            name.appendChild(editName);

            var surname = e.target.parentNode.parentNode.firstChild.nextSibling.nextSibling.nextSibling.nextSibling;//surname
            var surnameValue = surname.innerHTML;
            var editSurname = document.createElement("input");
            surname.innerHTML = "";
            editSurname.value = surnameValue;
            surname.appendChild(editSurname);

        });
    });
}

function SaveEvents(route) {
    var btnSaves = document.getElementsByClassName("save");

    Array.from(btnSaves).forEach((x) => {
        x.addEventListener("click", (e) => {
         //  if (!editStatus) {
           //     return;
         //   }//verify the editStatus
            let index = e.target.id;

           // if (index != editIndex) {
          //     return;
       //   }//verify the current item

            var idValue = e.target.parentNode.parentNode.firstChild.firstChild.value;
            var nameValue = e.target.parentNode.parentNode.firstChild.nextSibling.nextSibling.firstChild.value;
            var surnameValue = e.target.parentNode.parentNode.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.firstChild.value;
            items[index] = [idValue, nameValue, surnameValue];
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.reload();
                }
            };

            var tmp = "update?id="+ idValue
                + "&s_name=" + nameValue
                + "&s_surname=" + surnameValue;

            xhttp.open("GET", tmp, true);
            xhttp.send();
        });
    });
}
