// Função para fazer requisições API
async function api(path, opts = {}) {
    const headers = { 'Content-Type': 'application/json' };
    const res = await fetch(path, { ...opts, headers });

    if (res.status === 401) {
        window.location.href = 'login.php';
        return;
    }
    return await res.json();
}

// Função de login
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

// Função de registro
document.getElementById('registerForm').addEventListener('submit', async e => {
    e.preventDefault();
    const data = new FormData(e.target);
    const json = await api('register.php', { method: 'POST', body: new URLSearchParams(data) });
    if (json.success) {
        alert('Cadastro realizado com sucesso!');
        window.location.href = 'login.php';
    } else {
        alert('Erro no registro');
    }
});
