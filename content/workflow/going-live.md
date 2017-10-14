# Going Live

Quando um projeto está pronto para ir em produção, é necessário revisar uma checklist.

## Checklist Golive

### Servidor, DNS & Serviços

1. Configurar/Instalar SSL
1. Configurar DNS
1. Remover registros de DNS de desenvolvimento
1. Configurar CloudFlare
	1. Aumentar o tempo de cache para 8 dias
	1. Domínio sempre com WWW
1. Configurar Google Analytics 
1. Configurar Google Search Console 
1. Configurar Sentry
1. Configurar Forge
1. Análise de performance no [GT Metrix](gtmetrix.com)
1. Configurar notificações de deploys no Slack

### Back-end

1. Configurar Banco de Dados
1. Configurar E-mails transacionais
1. Configurar URIs
1. Revisar configuração geral da aplicação
1. Revisar configuração de CMS

### Front-end

1. Revisar arquivos **Gruntfile.js** ou **gulpfile.js**
1. Revisar arquivos **.less** que não estão sendo utilizados
1. Revisar imagens que não estão sendo utilizadas
1. Revisar **favicons**
1. Revisar templates dos e-mails transacionais
1. Revisar meta tags
1. Revisar página 404
1. Revisar fontes externas
1. Revisar se há algum erro no console do navegador
1. Habilitar versionamento de arquivos CSS e JS a cada deploy

### Conteúdo / UX

1. Revisar informações institucionais do projeto (nome, e-mail, telefone etc)
1. Liberar o projeto em uma URL temporária
1. Verificar se não há nenhum texto **"Lorem ipsum"**
1. Testar envios de todos os formulários
1. Testar navegação Desktop
1. Testar navegação Mobile
1. Configurar as dimensões das mídias do CMS