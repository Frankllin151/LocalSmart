<!---Filtro -->
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.default.min.css" rel="stylesheet" />
<section id="filtro">
  <form action="" class="filtro-buttons" method="get">
    <select name="local" id="local">
        <option value="">Localização</option>
        <option value="Bairro Batel">Bairro Batel</option>
        <option value="Bairro Bigorrilho">Bairro Bigorrilho</option>
        <option value="Bairro Água Verde">Bairro Água Verde</option>
    </select>

    <select name="preco" id="preco">
        <option value="">Todos os preços</option>
        <option value="1500">R$ 1.500,00/mês</option>
        <option value="2500">R$ 2.500,00/mês</option>
        <option value="3500">R$ 3.500,00/mês</option>
        <option value="4500">R$ 4.500,00/mês</option>
    </select>

    <select name="quarto" id="quarto">
        <option value="">Quartos</option>
        <option value="2">2 Quartos</option>
        <option value="3">3 Quartos</option>
        <option value="4">4 Quartos</option>
    </select>

    <input type="submit" value="Filtrar">
</form>
 </section>

 <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#local', {
        placeholder: 'Localização',
        allowEmptyOption: true
    });

    new TomSelect('#preco', {
        placeholder: 'Todos os preços',
        allowEmptyOption: true
    });

    new TomSelect('#quarto', {
        placeholder: 'Quartos',
        allowEmptyOption: true
    });
</script>
