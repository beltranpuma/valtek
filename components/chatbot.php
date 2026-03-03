<div id="waChat">
    <div id="waToggle" onclick="toggleChat()">
        <div class="agent-avatar">
            <i class="fas fa-user-tie"></i> <span class="online-status"></span>
        </div>
        <div class="agent-text">
            <small>¿En qué te ayudo?</small>
            <span>¡Hola! Cotiza ahora</span>
        </div>
    </div>

    <form id="waForm" class="glass-effect" onsubmit="sendWhatsApp(); return false;">
        <div class="form-header">
            <div class="header-info">
                <h3>Cotización Rápida</h3>
                <p>En línea ahora</p>
            </div>
            <button type="button" class="close-btn" onclick="toggleChat()">&times;</button>
        </div>

        <div class="form-body">
            <div class="input-group">
                <label>Empresa <span>*</span></label>
                <input type="text" id="wa-company" placeholder="Nombre de la empresa">
            </div>

            <div class="input-group">
                <label>Nombre <span>*</span></label>
                <input type="text" id="wa-name" placeholder="Escribe tu nombre">
            </div>

            <div class="input-group">
                <label>Correo Corporativo <span>*</span></label>
                <input type="email" id="wa-email" placeholder="correo@ejemplo.com">
            </div>

            <div class="input-group">
                <label>Detalle (Opcional)</label>
                <textarea id="wa-msg" rows="2" placeholder="¿Qué necesitas?"></textarea>
            </div>

            <button type="submit" class="btn-send" >
                Enviar a WhatsApp
            </button>
        </div>
    </form>
</div>