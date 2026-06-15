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
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">E-mail</label>
                <input type="email" id="email" name="email" required
                    placeholder="exemplo@email.com"
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm">
            </div>

            <button type="submit" 
                class="w-full cursor-pointer bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500/50 transition-all text-sm mt-2">
                Enviar dados
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            
            if (!empty($nome) && !empty($email)) {
                echo "
                <div class='mt-6 p-4 rounded-xl bg-emerald-50 border border-emerald-100 animate-fade-in'>
                    <h3 class='text-sm font-semibold text-emerald-800 flex items-center gap-1.5 mb-2'>
                         Dados recebidos com sucesso!
                    </h3>
                    <div class='text-xs text-emerald-700 space-y-1'>
                        <p><strong class='font-medium text-emerald-900'>Nome:</strong> {$nome}</p>
                        <p><strong class='font-medium text-emerald-900'>Email:</strong> {$email}</p>
                    </div>
                </div>";
            }
        }
        ?>
    </div>

</body>     
</html>