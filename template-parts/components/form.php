<form id="form-account" action="" onsubmit="gtag_report_conversion();">
  <div class="mail-data select-wrapper">
    <select name="escStatus" id="escStatus">
      <option value="" disabled>Selecione uma opção</option>
      <option value="possui-esc" selected>Já possuo ESC</option>
      <option value="nao-possui-esc">Não possuo ESC e desejo abrir</option>
      </select>
  </div>
    <!-- CNPJ Field -->
  <div class="mail-data" id="cnpj-field">
    <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" maxlength="18">
  </div>

  <!-- Nome e Telefone agrupados -->
  <div class="signin" id="nome-telefone-fields">
    <div class="mail-data">
      <input type="text" id="name" name="name" placeholder="Nome">
    </div>
    <div class="mail-data">
      <input type="phone" id="telefone" name="telefone" placeholder="Telefone">
    </div>
  </div>

  <!-- E-mail -->
  <div class="mail-data">
    <input type="email" id="email" placeholder="Insira seu e-mail">
  </div>

  <!-- Botão -->
  <div class="form-button">
    <button class="btn primary" type="submit" id="submit-button">Comece agora</button>
  </div>

</form>