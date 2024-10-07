
<div class="container">
        <h1>
            <div>
                <img src="img/logo2.png" alt="" class="header">
            </div>
        </h1>
        <form class="row g-3" method="POST" action="_scripts/input.php">
            
            <h3>POWER SUPLEMENTOS - Cadastro de produtos</h3>

            <div class="row g- campos">
                <div class="col-12 3 campo">
                    <input type="text" class="form-control" placeholder="Nome do produto" aria-label="Nome do produto" name="nome_produto" required>
                </div>
                <div class="col 3 campo">
                    <input type="text" class="form-control" placeholder="Preço de compra" aria-label="Preço de compra" name="preco_compra" required>
                </div>
                <div class="col 3 campo">
                    <input type="text" class="form-control" placeholder="Preço de venda" aria-label="Preço de venda" name="preco_venda" required>
                </div>
                <div class="col 3 campo">
                    <input type="text" class="form-control" placeholder="Código do produto" aria-label="Código do produto" name="codigo_produto" required>
                </div>
                <div class="col-12 3 campo">
                    <input type="text" class="form-control" placeholder="Nome do fornecedor" aria-label="Nome do fornecedor" name="nome_fornecedor" required>
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar peça</button>
            </div>
        </form>
</div>

    