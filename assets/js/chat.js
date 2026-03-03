//Chat Bot

function toggleChat() {
    const form = document.getElementById("waForm");
    form.classList.toggle("active");
}



function sendWhatsApp() {
    const nameInput = document.getElementById("wa-name");
    const companyInput = document.getElementById("wa-company");
    const emailInput = document.getElementById("wa-email");
    const msgInput = document.getElementById("wa-msg");


    const name = nameInput.value.trim();
    const company = companyInput.value.trim();
    const email = emailInput.value.trim();
    const msg = msgInput.value.trim();


    if (!company) {
        alertify.error("El nombre de la empresa es obligatorio");
        companyInput.focus();
        return;
    }
    if (!name) {
        alertify.error("Por favor, dinos tu nombre");
        nameInput.focus();
        return;
    }
    if (!email) {
        alertify.error("El correo electrónico es necesario");
        emailInput.focus();
        return;
    }
    
 
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alertify.error("Por favor, ingresa un correo válido");
        emailInput.focus();
        return;
    }


    const businessNumber = "51949671623"; 
    const saludo = "¡Hola! Estoy interesado en una cotización.";
    
 
    const text = encodeURIComponent(
        `*SOLICITUD DE COTIZACIÓN - WEB*\n\n` +
        `*Empresa:* ${company}\n` +
        `*Contacto:* ${name}\n` +
        `*Correo:* ${email}\n` +
        `*Detalles:* ${msg || 'El cliente no especificó detalles.'}\n\n` +
        `_Enviado desde el formulario._`
    );

 
    alertify.success("Abriendo WhatsApp...");
    
    setTimeout(() => {
        window.open(`https://wa.me/${businessNumber}?text=${text}`, "_blank");
        
        
        companyInput.value = "";
        nameInput.value = "";
        emailInput.value = "";
        msgInput.value = "";
        
       
        toggleChat();
    }, 1000); 
}