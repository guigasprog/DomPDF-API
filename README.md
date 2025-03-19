# DomPDF-API  

Uma API simples e eficiente em PHP para converter HTML em PDF utilizando a biblioteca [DomPDF](https://github.com/dompdf/dompdf). Envie um documento HTML via **request body** e receba um PDF gerado dinamicamente como resposta.  

## 📌 Funcionalidades  
- 📄 **Conversão de HTML para PDF** via requisição HTTP  
- 🎨 **Suporte a CSS** para estilização avançada  
- 📥 **Entrada via request body** (JSON ou HTML bruto)  
- ⚡ **Resposta direta em PDF** para download ou visualização  
- 🔒 **Configurações personalizáveis** para margens, tamanho da página e mais  

## 🚀 Como usar  
1. Envie uma requisição **POST** para `/gerar-pdf.php` com o HTML no corpo da requisição  
2. Receba o PDF gerado como resposta  

💡 Ideal para geração de relatórios, faturas, contratos e muito mais!  

> Desenvolvido em PHP com [DomPDF](https://github.com/dompdf/dompdf).
