<?php
$ano_atual = intval(date('Y'));
?>
<!DOCTYPE html>
<html lang="pt-BR" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Cadastro de e-mail</title>
</head>

<body class="h-full flex flex-col items-center justify-center p-4 sm:p-6">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-100 p-6 sm:p-8 transition-all">

        <header class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">
                <?php echo "Formulário de Cadastro"; ?>
            </h2>
            <p class="text-sm text-slate-500 mt-1">Preencha os campos abaixo para registrar seu e-mail.</p>
        </header>

        <form action="" method="POST" class="space-y-5">
            <div>
                <label for="nome" class="block text-sm font-semibold text-slate-700 mb-1.5">Nome completo</label>
                <input type="text" id="nome" name="nome" required
                    placeholder="Ex: João Silva"
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm">
            </div>

            <div>
                <label for="ano" class="block text-sm font-semibold text-slate-700 mb-1.5">Ano de nascimento</label>
                <input type="number" id="ano" name="ano" required
                    placeholder="2000" min="1920" max="<?php echo $ano_atual ?>"
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm">
            </div>
            <div>
                <label for="fez_niver" class="block text-sm font-semibold text-slate-700 mb-1.5">Já fez aniversário este ano?</label>
                <select id="fez_niver" name="fez_niver" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>

            <button type="submit"
                class="w-full cursor-pointer bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500/50 transition-all text-sm mt-2">
                Calcular idade
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $ano = htmlspecialchars($_POST['ano']);
            $fez_niver = htmlspecialchars($_POST['fez_niver']);

            if (!empty($nome) && !empty($ano) && !empty($fez_niver)) {
                if ($fez_niver === "sim") {
                    $idade = $ano_atual - $ano;
                } else {
                    $idade = $ano_atual - $ano - 1;
                }
                echo "Sua idade é ".$idade;
            }
        }
        ?>
    </div>

</body>

</html>
