# Link do Site

https://minasvalley.herokuapp.com/

# GITFLOW

Este projeto adota o seguinte gitflow:

![Image of our GITFLOW](https://github.com/bijooj/minas-valley/blob/master/img/git/gitFlow.PNG)

# Estrutura do Projeto
Este projeto adota o modelo de projetos Maven

# Estrutura de Diretórios

Este projeto adota a seguinte estrutura de diretórios:

- `maven.main`
  - `pom.xml`, que é o nosso arquivo de configuração.
  - `target`, que é onde ficar as classes.
  - `src`
  	- `java`
  		- `app`
  		- `dao`
  		- `model`
  		- `service`
  	- `resources`
  		- `backEnd`
  		- `frontEnd`
  		- `images`
  		- `scripts`
  		- `styles`
  		- `vendor`
  		- `vid`

> O grupo é livre para alterar a estrutura proposta. No entanto, nesse
> caso, o arquivo `README.md` deve ser devidamente modificado para
> detalhar a nova estrutura e onde cada um dos artefatos produzidos
> estão localizados.

## java

Este diretório armazena o código do projeto em que faz as conexões, necessaria para que haja a ligação do codigo html com o banco de dados.
 
- O diretório `app` armazena o arquivo java do projeto
- O diretório `dao` armazena os arquivos java do projeto que faz conexão ao banco de dados
- O diretório `model` armazena os arquivos Java do projeto que possui a classe de cada tabela
- O diretório `service` armazena os arquivos Java do projeto faz as requisições ao HTML

## src

Este diretório armazena o código fonte do projeto e adota uma hierarquia
básica de projetos Web simples, que utilizam as tecnologias HTML, CSS, e
JavaScript:
 
- O diretório `frontEnd` armazena os arquivos HTML do projeto
- O diretório `backEnd` armazena os arquivos PHP do projeto
- O diretório `scripts` armazena os arquivos JavaScripts do projeto
- O diretório `styles` é utilizado para os arquivos CSS
- O diretório `images` é utilizado para os arquivos de imagens
- O diretório `vendor` é reservado para incluir bibliotecas e frameworks
  utilizados no projeto como Bootstrap, jQuery, etc.
