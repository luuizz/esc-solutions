# ESC Solutions - Tema WordPress

Este repositório contém o código-fonte do tema WordPress desenvolvido para o site da empresa **ESC Solutions**. A estrutura foi organizada para facilitar o desenvolvimento e manutenção, utilizando ferramentas modernas como **Gulp** e **SCSS**.

---

## 📦 Instalação

1. Clone ou copie o tema para o diretório de temas do seu WordPress:  
   `wp-content/themes/esc-solutions/`

2. Certifique-se de que está no diretório correto do tema:

   ```bash
   cd wp-content/themes/esc-solutions
   ```

3. Instale as dependências com Yarn ou npm:

   ```bash
   yarn
   # ou
   npm install
   ```

4. Inicie o servidor com Gulp:

   ```bash
   gulp
   ```

   O site será iniciado em `http://localhost:3000` com **BrowserSync**.

---

## 🗂 Estrutura de Pastas

```
📁 assets/         → Imagens, ícones e logos
📁 css/            → CSS gerado automaticamente (não editar manualmente)
📁 fonts/          → Fontes do projeto
📁 js/             → Scripts JavaScript
📁 node_modules/   → Dependências (após `yarn` ou `npm install`)
📁 scss/           → Arquivos SCSS (estilos fonte)
📁 template-parts/ → Componentes PHP reutilizáveis
📄 *.php           → Arquivos principais do tema (header, footer, pages, etc.)
```

---

## 🎨 Estilos com SCSS

Os estilos são escritos em SCSS. Para manter a organização, use:

```scss
// Exemplo de uso no main.scss
@use 'nomedoarquivo';
```

- Arquivos SCSS devem seguir o padrão `_nomedoarquivo.scss`.
- O Gulp compila e minifica automaticamente para `style.css`, incluindo **autoprefixer**.

---

## ✨ Ícones SVG Dinâmicos

Foi criada uma função no `functions.php` para renderizar ícones SVG:

```php
function render_svg_icon($name, $class = '') {
  $filename = "icon-{$name}.svg";
  $filepath = get_template_directory() . "/assets/icons/{$filename}";

  if (file_exists($filepath)) {
    $svg = file_get_contents($filepath);

    if ($class) {
      if (preg_match('/<svg[^>]*class="/', $svg)) {
        $svg = preg_replace('/<svg[^>]*class="/', '<svg class="' . esc_attr($class) . ' ', $svg, 1);
      } else {
        $svg = preg_replace('/<svg([^>]*)>/', '<svg$1 class="' . esc_attr($class) . '">', $svg, 1);
      }
    }

    return $svg;
  }

  return '<!-- Ícone não encontrado: ' . esc_html($name) . ' -->';
}
```

**Uso no template:**

```php
<?= render_svg_icon('nomedoicone', 'icon-nomedoicone') ?>
```

- Os ícones devem estar no diretório `assets/icons/`
- Nome dos arquivos no formato: `icon-nomedoicone.svg`
- O nome e classe devem coincidir, senão o fallback será exibido.

---

## 🧠 JavaScript

Os arquivos JS devem ser adicionados em:

```
js/scripts/
```

- O Gulp irá compilar e minificar todos os arquivos em um único bundle final.
- Lógica específica do formulário da página do sistema está no arquivo:

```js
js / scripts / form.js;
```

---

## 🧩 PHP

- Os componentes reutilizáveis (seções, blocos) estão em:

```
template-parts/
```

- As páginas principais estão na raiz do tema:

```
header.php
footer.php
page-lp01.php
page-politica.php
single.php
404.php
etc.
```

---

## 🧑‍💻 Autor

**Luiz Ricardo**  
[MIT License](LICENSE)
