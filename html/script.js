/*
    Este código foi desenvolvido por DevWave.
    Todos os direitos reservados © 2024.
*/


// Adiciona um listener para o evento de submissão do formulário de leads
document.getElementById("lead-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Previne o comportamento padrão de submissão

    const email = document.getElementById("email").value; // Obtém o valor do campo de e-mail
    const responseMessage = document.getElementById("response-message"); // Elemento para exibir mensagens

    if (validateEmail(email)) { // Valida o e-mail
        responseMessage.textContent = "Obrigado por se inscrever!"; // Mensagem de sucesso
        responseMessage.style.color = "green"; // Cor verde para sucesso
        document.getElementById("lead-form").reset(); // Reseta o formulário
    } else {
        responseMessage.textContent = "Por favor, insira um e-mail válido."; // Mensagem de erro
        responseMessage.style.color = "red"; // Cor vermelha para erro
    }
});

// Função para validar o formato do e-mail usando expressão regular
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email); // Retorna true se o e-mail for válido
}
