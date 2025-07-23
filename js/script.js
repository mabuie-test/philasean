// Script básico para interação com o backend via Fetch API
async function api(path, opts = {}) {
    const headers = { 'Content-Type': 'application/json' };
    const res = await fetch(path, { ...opts, headers });

    if (res.status === 401) {
        window.location.href = 'login.php';
        return;
    }
    return await res.json();
}

// Exemplo de login
document.getElementById('loginForm').addEventListener('submit', async e => {
    e.preventDefault();
    const data = new FormData(e.target);
    const json = await api('login.php', { method: 'POST', body: new URLSearchParams(data) });
    if (json.token) {
        window.location.href = 'reserva.php';
    } else {
        alert('Erro no login');
    }
});

