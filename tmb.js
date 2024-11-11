function calcularTMB(sexo, idade, peso, altura) {
    let tmb;
    if (sexo.toLowerCase() === 'masculino') {
        tmb = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * idade);
    } else if (sexo.toLowerCase() === 'feminino') {
        tmb = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * idade);
    } else {
        return "Sexo inválido. Use 'masculino' ou 'feminino'";
    }

    if (typeof tmb === 'number') {
        resultado.textContent = `Sua taxa de metabolismo basal (TMB) é: ${tmb.toFixed(2)} calorias por dia.`;
    } else {
        resultado.textContent = tmb;
    }
    return tmb;
}

