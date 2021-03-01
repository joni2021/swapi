const url = window.location.href;

document.addEventListener("DOMContentLoaded", function(event) {
    const importar = document.getElementById("importar");


    importar.addEventListener("click", async function(){
        importar.disabled = true;
        importar.style.opacity = "0.5";


        let rta = await fetch(url + "import-data",{
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
        });

        if(rta){
            var toastEl = document.getElementById("toast");
            let toast = new bootstrap.Toast(toastEl);

            toast.show();
            importar.partent().removeChild(importar);
        }else{
            importar.disabled = false;
            importar.style.opacity = "1";
        }

    })

})
