const $form_comments = document.getElementById("formulario_coment");

const reads_comments = () => {
    (function loads() {
        const $formcoments = document.getElementById("formulario_coment");
        const $divElements2 = document.getElementById("piblic_coment");
        // const $btnAdd = document.getElementById("btn_add_usuario");
        const templateElement = (data, data2) => {
            return `
            <div class="user-info">
              <div class="user-avt">
                <img src="./images/usuarionuevo.jpg" alt="">
              </div>
              <div class="user-name">
                     <span class="name"> ${data}</span>
                     <span class="rating">
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                     </span>
                 </div>
             </div>
             <div class="user-rate-content">
                 ${data2}
             </div>
        `;
        };
        const templateElement2 = (data) => {
            return `${data}`;
        };

        if (
            $formcoments.name_coment_input.value != "" &&
            $formcoments.textarea_coment_input.value != ""
        ) {
            const $div = document.createElement("div");
            $div.setAttribute("id", "iduser-rate");
            $div.classList.add("user-rate");
            $div.innerHTML = templateElement(
                `${$form_comments.name_coment_input.value}`,
                `${$form_comments.textarea_coment_input.value}`
            );
            $divElements2.insertBefore($div, $divElements2.firstChild);
            // $divElements2.appendChild($div);

            $formcoments.reset();
        } else {
            alert("Complete los campos por favor...!!!");
        }
    })();
};

$form_comments.addEventListener("submit", (e) => {
    e.preventDefault();
    reads_comments();
});

// //creamos el primer div1
//             const $div1 = document.createElement("div");
//             $div1.classList.add("user-name");
//             // $div1.setAttribute("id", "div1");
//             $div1.innerHTML = templateElement(
//                 `${$form_comments.textarea_coment_input.value}`
//             );

//             const $div2 = document.createElement("div");
//             $div2.classList.add("user-info");
//             $div2.setAttribute("id", "div2");
//             const $div2_id = document.getElementById("div2");
//             $div2_id.appendChild("div1");

//             const $div3 = document.createElement("div");
//             $div3.classList("user-rate");
//             $div3.setAttribute("id", "div3");
//             const div3_id = document.getElementById("div3");

//             div3_id.appendChild($div2);
//             $divElements2.appendChild("div3");

// form_coments.forEach((botones) => {
//     botones.addEventListener("click", console.log('hola mundo'));
// });

// (function loads() {
//     const $formcoments = document.getElementById("formulario_coment");
//     const $divElements = document.getElementById("Elementos_Usuario");
//     // const $btnAdd = document.getElementById("btn_add_usuario");
//     const templateElement = (data) => {
//         return `
//             <strong><i class="check_valid fas fa-check"></i> User-</strong> ${data}
//         `;
//     };
//     if ($formcoments.usuario.value != "") {
//         const $div = document.createElement("div");
//         $div.classList.add("notification_usuario");
//         $div.innerHTML = templateElement(`${$form.usuario.value}`);
//         $divElements.appendChild($div);

//         $form.reset();
//     }
// })();