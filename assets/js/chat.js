//Chat Bot

function toggleChat() {
    const form = document.getElementById("waForm");
    form.classList.toggle("active");
}



function sendWhatsApp() {
    const name = document.getElementById("wa-name").value.trim();
    const phone = document.getElementById("wa-phone").value.trim();
    const company = document.getElementById("wa-company").value.trim();
    const email = document.getElementById("wa-email").value.trim();
    const msg = document.getElementById("wa-msg").value.trim();

    // Validación con alertify
    if(!company) { alertify.error("Por favor ingresa el nombre de la empresa."); return; }
    if(!name) { alertify.error("Por favor ingresa tu nombre."); return; }
    if(!phone) { alertify.error("Por favor ingresa tu celular."); return; }
    if(!email) { alertify.error("Por favor ingresa tu correo."); return; }
    if(!msg) { alertify.error("Por favor ingresa el detalle de tu solicitud."); return; }

    const businessNumber = "51928097797"; // Tu número WhatsApp

    const text = encodeURIComponent(
        `*Nuevo contacto desde la web*\n\n` +
        `*Empresa:* ${company}\n` +
        `*Nombre:* ${name}\n` +
        `*Celular:* ${phone}\n` +
        `*Correo:* ${email}\n\n` +
        `*Detalle:*\n${msg}`
    );

    // Abrir WhatsApp
    window.open(`https://wa.me/${businessNumber}?text=${text}`, "_blank");

    // Limpiar campos después de enviar
    document.getElementById("wa-name").value = "";
    document.getElementById("wa-phone").value = "";
    document.getElementById("wa-company").value = "";
    document.getElementById("wa-email").value = "";
    document.getElementById("wa-msg").value = "";

    // Cerrar formulario automáticamente (opcional)
    document.getElementById("waForm").classList.remove("active");
}
