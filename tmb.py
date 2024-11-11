def calcular_tmb(sexo, idade, peso, altura):
    if sexo.lower() == 'masculino':
        tmb = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * idade)
    elif sexo.lower() == 'feminino':
        tmb = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * idade)
    else: 
        return "Sexo inválido. Use 'masculino' ou 'feminino'"
    return tmb


sexo = input("Digite seu sexo(masculino/feminino): ").strip()
idade = int(input("Digite sua idade: ").strip())
peso = float(input("Digite seu peso em kg: ").strip())
altura = float(input("Digite sua altura em cm: " ).strip())

tmb = calcular_tmb(sexo, idade, peso, altura)

if isinstance(tmb, float):
    print(f"Sua taxa de metabolismo basal(TMB) é: {tmb:.2f} calorias por dia.")
else:
    print(tmb)