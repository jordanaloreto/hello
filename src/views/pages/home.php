<div class="container">
    <div class="gradient-border">

        <header class="py-4">
            <div class="container">

                <h1><?= htmlspecialchars($greeting) ?> 👋</h1>

                <h3>Isso é o que conseguimos saber sobre você:</h3>

                <ul>
                    <li><strong>IP:</strong> <?= htmlspecialchars($ip) ?></li>
                    <li><strong>País:</strong> <?= htmlspecialchars($geoData['country'] ?? 'Desconhecido') ?></li>
                    <li><strong>Cidade:</strong> <?= htmlspecialchars($geoData['city'] ?? 'Desconhecida') ?></li>
                    <li><strong>Região:</strong> <?= htmlspecialchars($geoData['regionName'] ?? 'Desconhecida') ?></li>
                    <li><strong>Provedor (ISP):</strong> <?= htmlspecialchars($geoData['isp'] ?? 'Desconhecido') ?></li>
                    <li><strong>Idioma do navegador:</strong> <?= htmlspecialchars($langHeader) ?></li>
                    <li><strong>Navegador:</strong> <?= htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? 'Desconhecido') ?></li>
                </ul>

            </div>
        </header>
    </div>
</div>
<br>
<section>
    <div class="container">
        <div class="gradient-border">
            <header class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <p class="lead">
                                Este projeto foi desenvolvido com base na ideia proposta no repositório do GitHub
                                (Hello). Além de implementar os requisitos originais, o foco principal
                                é mostrar o que sites e aplicações conseguem saber de você ao pegarem dados 
                                como seu endereço IP.
                            </p>
                            <p class="lead">
                                Esse projeto foi feito utilizando PHP 8.4, Laravel Herd e o template Personal do Start Bootstrap
                            </p>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</section>

<style>
    .gradient-border {
        padding: 2px;
        border-radius: 15px;
        background: linear-gradient(135deg, #6f42c1, #0d6efd);
    }

    .gradient-border>header {
        background: white;
        border-radius: 13px;
    }

    .tool-card {
        border-radius: 10px;
        padding: 10px;
        cursor: pointer;
        transition: 0.2s;
        background: white;
        border: 1px solid #eee;
    }

    .tool-card:hover {
        transform: translateY(-2px);
    }

    .tool-content {
        max-height: 0;
        overflow: hidden;
        transition: 0.3s ease;
    }

    .tool-content.active {
        max-height: 100px;
    }
</style>