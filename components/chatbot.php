    <!-- ******************************************************** -->
    <!-- *******************      CHAT       **************** -->
    <!-- ******************************************************** -->
        <div id="waChat">
            <div id="waToggle" onclick="toggleChat()">
                <i class="fas fa-comment-dollar"></i>
                <span class="blink">Cotiza Ahora</span>
            </div>

            <form id="waForm" onsubmit="sendWhatsApp(); return false;">
                <h3><i class="fas fa-paper-plane"></i> Solicitar Cotización</h3>

                <label><i class="fas fa-building"></i> Empresa:<span>*</span></label>
                <input type="text" id="wa-company" placeholder="Nombre de la empresa">

                <label><i class="fas fa-user"></i> Nombre:<span>*</span></label>
                <input type="text" id="wa-name" placeholder="Tu nombre">

                <label><i class="fas fa-phone"></i> Celular:<span>*</span></label>
                <input type="tel" id="wa-phone" placeholder="Ej: +519XXXXXXXX">

                <label><i class="fas fa-envelope"></i> Correo:<span>*</span></label>
                <input type="email" id="wa-email" placeholder="correo@ejemplo.com">

                <label><i class="fas fa-comment"></i> Detalle:<span>*</span></label>
                <textarea id="wa-msg" rows="4" placeholder="Describe tu solicitud"></textarea>

                <button type="submit"><i class="fab fa-whatsapp"></i> Enviar a WhatsApp</button>
            </form>
        </div>
