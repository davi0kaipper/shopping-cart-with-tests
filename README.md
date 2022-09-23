# Shopping Cart With Tests

## 1.Problema

Implementar um mecanismo de carrinho de compra que permita as operações de (1) adicionar um item, (2) remover um item, (3) listar os itens existentes no carrinho, (4) mostrar a quantidade de itens e (5) mostrar o valor total. Um item deve ser composto por um produto, uma quantidade e um valor de desconto. E, por fim, um produto deve ser composto por um id, uma descrição e um valor.

Recomenda-se iniciar a implementação de forma mais simples e, aos poucos, torná-la mais robusta. É necessário utilizar testes automatizados para garantir o funcionamento correto da implementação e de potenciais modificações. Recomenda-se ainda levar em consideração todo o aprendizado relacionado a orientação a objetos, princípios e boas práticas.

## 2. Temas Abordados

* Testes Automatizados
* PHPUnit
* PSR-12
* Tell, don't ask
* Primitive obsession
* Lei de Demeter
* PHP Code Sniffer

## 3. Solução

O foco em revisitar este projeto foi revisar e consolidar conceitos já aprendidos como *POO*, *PSR-12*, *Lei de Demeter*, *Objetos de Valor*, e praticar conceitos novos como **autoload**, **Composer**, **testes**, e **PHPUnit**.

Pude utilizar das ferramentas do Composer, como o autoload para facilitar o acesso entre arquivos e classes, e como suas formas práticas de instalar e gerir dependências úteis.

Também serviu muito bem aplicar com atenção os fundamentos apropriados nas seções de testes, como o **triple A** e os **testes de unidade**, além do uso das ferramentas especializadas como o **PHPUnit**, **PHP CodeSniffer** e **Collision**.

Os conceitos de **Lei de Demeter** e **Objetos de Valor** ajudaram a construir um código baixamente acoplado e sem obsessão por primitivos.

## 4. Ferramentas

### 1. Executar PHPUnit

```sh
$ vendor/bin/phpunit
```

### 2. Executar PHPUnit com cores

```sh
$ vendor/bin/phpunit tests --colors
```

### 3. Executar PHPUnit no formato testdox

```sh
$ vendor/bin/phpunit tests --testdox
```

### 4. Executar PHPUnit com filtro

```sh
$ vendor/bin/phpunit tests --filter Shopping
```

### 5. Executar PHPUnit com filtro por classe

```sh
$ vendor/bin/phpunit tests --filter ShoppingCartTest
```

### 6. Executar PHPUnit com filtro por método

```sh
$ vendor/bin/phpunit tests --filter testCountNumberOfItemsInShoppingCart
```

### 7. Instalar Collision para melhorar uso do PHPUnit

```sh
$ composer require nunomaduro/collision --dev
```

### 8. Executar PHP CodeSniffer para identificar violações de estilo de código

```sh
$ vendor/bin/phpcs
```

### 9. Executar PHP CodeSniffer para corrigir violações de estilo de código

```sh
$ vendor/bin/phpcbf
```