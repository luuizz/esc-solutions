<form id="form-account" action="" onsubmit="gtag_report_conversion();">
  <div class="mail-data select-wrapper">
    <select name="escStatus" id="escStatus">
      <option value="" disabled>Selecione uma opção</option>
      <option value="possui-esc" selected>Já possuo ESC</option>
      </select>
  </div>
    <!-- CNPJ Field -->
  <div class="mail-data" id="cnpj-field">
    <input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ da sua ESC" maxlength="18">
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