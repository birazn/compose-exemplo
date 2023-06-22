# Criando um LAMP básico com gerenciamento
Neste repositório temos um exemplo de `docker compose` para implementar um infraestrutura **LAMP** com gerenciamento do banco **MySQL** usando **Adminer**.

## Executando

Faça um clone do repositório para sua máquina.

```bash
git clone https://github.com/birazn/compose-exemplo.git
cd compose-exemplo
docker compose up -d
```

Acesse http://localhost para acessar a pagina inicial.

O Banco de dados ainda não tem tabelas, para importar a tabela exemplo siga o passo a passo [aqui](https://scribehow.com/shared/Acessando_MySQL_via_Adminer__fDSOlD6LRCWeagws0XVUeA)

Depois disso basta efetuar os testes do CRUD
