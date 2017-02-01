# mapasculturais-culturaenlinea

Este é o tema base para a plataforma Cultura en Linea.

# Ambiente Cultura en Linea

O ambiente para a plataforma Cultura en Linea é composto dos seguintes repositórios:

* [Tema: culturaenlinea (este repositório)](https://github.com/LibreCoopUruguay/mapasculturais)
* [Mapas Culturais](https://github.com/LibreCoopUruguay/mapasculturais)
* [mapasculturais-teatros](https://github.com/LibreCoopUruguay/mapasculturais-teatros)
* [MultipleLocalAuth](https://github.com/LibreCoopUruguay/MultipleLocalAuth)

Os temas devem ser colocados na pasta application/themes e o plugin na pasta application/plugins da aplicação base.

Para construir a árvore do ambiente:
```
git clone git@github.com:LibreCoopUruguay/mapasculturais.git
cd mapasculturais
git checkout dev-culturaenlinea
# OBS: Para desenvolver, utilize o branch rc (veja explicação mais abaixo)
cd src/protected/application/themes
git clone git@github.com:LibreCoopUruguay/mapasculturais-culturaenlinea.git culturaenlinea
git clone git@github.com:LibreCoopUruguay/mapasculturais-culturaenlinea.git teatros
cd ../plugins
git clone git@github.com:LibreCoopUruguay/MultipleLocalAuth.git

```

# Cuidados com o repositorio mapasculturais

O repositorio LibreCoop/mapasculturais é um fork do repositorio original do mapasculturais (hacklabr/mapasculturais).

É importante que mantenhamos nosso branch master sempre sincronizado com o reposiório original.

Isto é importante para que possamos, sempre que quisermos, enviar Pull Requests para o repositório original. Se nós fizermos alterações específicas no nosso fork, não poderemos mais enviar Pull requests, pois o pull request é sempre feito com a branch inteira, ou seja, não é possível enviar um pull request de apenas alguns commits.

Sempre que formos trabalhar em algo que queremos enviar como pull request para o repositorio original, precisamos faze-lo no branch rc (release candidate). Apos fazer o commit, atualizamos também a nossa branch de produção.



* NUNCA use "git add ." * - Não queremos adicionar arquivos temporários e as pastas dos temas e plugins ao repositorio!. Adicione manualmente os arquivos que deseja adicionar 
