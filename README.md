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
git checkout librecoop
cd src/protected/application/themes
git clone git@github.com:LibreCoopUruguay/mapasculturais-culturaenlinea.git culturaenlinea
git clone git@github.com:LibreCoopUruguay/mapasculturais-culturaenlinea.git teatros
cd ../plugins
git clone git@github.com:LibreCoopUruguay/MultipleLocalAuth.git

```

# Cuidados com o repositorio mapasculturais

O repositorio LibreCoop/mapasculturais é um fork do repositorio original do mapasculturais.

É importante que mantenhamos nosso branch master sempre sincronizado com o master do reposiório original.

Isto é importante para que possamos, sempre que quisermos, enviar Pull Requests para o repositório original. Se nós fizermos alterações específicas no nosso fork, não poderemos mais enviar Pull requests, pois o pull request é sempre feito com a branch inteira, ou seja, não é possível enviar um pull request de apenas alguns commits.

Para isso, criamos a branch *librecoop* que é a nossa branch de trabalho e onde podemos fazer pequenas alterações. Por exemplo, nesta branch modificamos o arquivo .gitignore, para que nosso git ignore as pastas dos temas e plugin que utilizamos. Isto nos ajuda a evitar que adicionemos esses arquivos por engano ao repositório.

# Trabalhando com internacionalização ou com outras funcionalidades que se quer enviar para o repositorio original

Sempre que formos trabalhar em algo que queremos enviar como pull request para o repositorio original, precisamos faze-lo em um branch novo limpo, sincronizado com o master.

Para trabalhar com internacionalização, use o branch devel-i18n, que já existe.

Para fazer outras coisas, crie um branch novo a partir do master.
```
git checkout master
git pull
git checkou -b devel-nova-feature
...
git push origin devel-nova-feature
```

* NUNCA use "git add ." * - Não queremos adicionar arquivos temporários e as pastas dos temas e plugins ao repositorio!. Adicione manualmente os arquivos que deseja adicionar 
